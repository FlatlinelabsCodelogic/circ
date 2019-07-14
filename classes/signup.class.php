<?php
/**
 * Created by PhpStorm.
 * User: goldenboy
 * Date: 6/14/2019
 * Time: 5:40 PM
 */

namespace signup;


class signup
{
    protected $db;
    protected $cfg;
    protected $from;
    protected $to;
    protected $subject;
    protected $message;
    protected $html;
    protected $listener;
    protected $confirmCode;

    public function __construct(PDO $db, $listener, $frmName, $frmAddress, $subj, $msg, $html)
    {
        $this->db = $db;
        $this->cfg = parse_ini_file('settings.ini', TRUE);
        /*$this->listener = $listener;
        $this->from[$frmName] = $frmAddress;
        $this->subject = $subj;
        $this->message = $msg;
        $this->html = $html;*/
    }

    private function createCode($login)
    {
        srand((double)microtime() * 1000000);
        $this->confirmCode = md5($login . time() . rand(1, 1000000));
    }

    public function createSignup($userDetails)
    {
        $user_table = $this->cfg['users_table']['table'];
        $user_login = $this->cfg['users_table']['col_login'];
        $user_pass = $this->cfg['users_table']['col_password'];
        $user_email = $this->cfg['users_table']['col_email'];
        $user_first = $this->cfg['users_table']['col_name_first'];
        $user_last = $this->cfg['users_table']['col_name_last'];
        $user_sig = $this->cfg['users_table']['col_signature'];
        $sign_table = $this->cfg['signup_table']['table'];
        $sign_login = $this->cfg['signup_table']['col_login'];
        $sign_pass = $this->cfg['signup_table']['col_password'];
        $sign_email = $this->cfg['signup_table']['col_email'];
        $sign_first = $this->cfg['signup_table']['col_name_first'];
        $sign_last = $this->cfg['signup_table']['col_name_last'];
        $sign_sig = $this->cfg['signup_table']['col_signature'];
        $sign_code = $this->cfg['signup_table']['col_code'];
        $sign_created = $this->cfg['signup_table']['col_created'];
        try
        {
            $sql = "SELECT COUNT(*) AS num_row FROM " . $user_table . " WHERE " . $user_login . " =:login OR " . $user_email . " =:email";
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(':login', $userDetails[$user_login]);
            $stmt->bindParam(':email', $userDetails[$user_email]);
            $stmt->execute();
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
        }
        catch (PDOException $e)
        {
            throw new SignUpDatabaseException('Database error when' .
                ' checking user is unique: '.$e->getMessage());
        }
        if ($result['num_row'] > 0)
        {
            throw new SignUpNotUniqueException(
                'username and email address not unique');
        }
        $this->createCode($userDetails[$user_login]);
        $toName = $userDetails[$user_first] . ' ' .
            $userDetails[$user_last];
        $this->to[$toName] = $userDetails[$user_email];
        try
        {
            $sql = "INSERT INTO " . $sign_table .
                "(". $sign_login . ", " . $sign_pass .
                ", " . $sign_email . ", " . $sign_first .
                ", " . $sign_last . ", " . $sign_sig .
                ", " . $sign_code . ", " . $sign_created . ") ".
                "VALUES (:login, :password,
:email, :firstname, :lastname,
:signature, :confirm, :time)";
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(':login', $userDetails[$user_login]);
            $stmt->bindParam(':password', $userDetails[$user_pass]);
            $stmt->bindParam(':email', $userDetails[$user_email]);
            $stmt->bindParam(':firstname', $userDetails[$user_first]);
            $stmt->bindParam(':lastname', $userDetails[$user_last]);
            $stmt->bindParam(':signature', $userDetails[$user_sig]);
            $stmt->bindParam(':confirm', $this->confirmCode);
            $stmt->bindParam(':time', time());
            $stmt->execute();
        }
        catch (PDOException $e)
        {
            throw new SignUpDatabaseException('Database error when' .
                ' inserting into signup: '.$e->getMessage());
        }
    }

    public function sendConfirmation()
    {
// Pear Mail_Mime included in the calling script
        $fromName = key($this->from);
        $hdrs = array(
            'From'
            => $this->from[$fromName],
            'Subject' => $this->subject
        );
        $crlf = "\n";
        if ($this->html)
        {
            $replace = '<a href="' . $this->listener . '?code=' .
                $this->confirmCode . '">' . $this->listener .
                '?code=' . $this->confirmCode . '</a>';
        }
        else
        {
            $replace = $this->listener . '?code=' . $this->confirmCode;
        }
        $this->message = str_replace('<confirm_url/>',
            $replace,
            $this->message
        );
        $mime = new Mail_mime($crlf);

        $mime->setHTMLBody($this->message);
        $mime->setTXTBody(strip_tags($this->message));
        $body = $mime->get();
        $hdrs = $mime->headers($hdrs);
        $mail = Mail::factory('mail');
        $succ = $mail->send($this->to, $hdrs, $body);
        if (PEAR::isError($succ)) {
            throw new SignUpEmailException('Error sending confirmation' .
                ' email: ' . $succ->getDebugInfo());
        }
    }

    public function confirm($confirmCode)
    {
        $user_table = $this->cfg['users_table']['table'];
        $user_login = $this->cfg['users_table']['col_login'];
        $user_pass = $this->cfg['users_table']['col_password'];
        $user_email = $this->cfg['users_table']['col_email'];
        $user_first = $this->cfg['users_table']['col_name_first'];
        $user_last = $this->cfg['users_table']['col_name_last'];
        $user_sig = $this->cfg['users_table']['col_signature'];
        $sign_table = $this->cfg['signup_table']['table'];
        $sign_id = $this->cfg['signup_table']['col_id'];
        $sign_login = $this->cfg['signup_table']['col_login'];

        $sign_pass = $this->cfg['signup_table']['col_password'];
        $sign_email = $this->cfg['signup_table']['col_email'];
        $sign_first = $this->cfg['signup_table']['col_name_first'];
        $sign_last = $this->cfg['signup_table']['col_name_last'];
        $sign_sig = $this->cfg['signup_table']['col_signature'];
        $sign_code = $this->cfg['signup_table']['col_code'];
        try
        {
            $sql = "SELECT * FROM " . $sign_table . "
WHERE " . $sign_code . "=:confirmCode";
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(':confirmCode', $confirmCode);
            $stmt->execute();
            $row = $stmt->fetchAll();
        }
        catch (PDOException $e)
        {
            throw new SignUpDatabaseException('Database error when' .
                ' inserting user info: '.$e->getMessage());
        }
        if (count($row) != 1) {
            throw new SignUpConfirmationException(count($row) .
                $confirmCode
            );
        }
        try
        {
// Copy the data from Signup to User table
            $sql = "INSERT INTO " . $user_table . " (
" . $user_login . ", " . $user_pass . ",
" . $user_email . ", " . $user_first . ",
" . $user_last . ", " . $user_sig . ") VALUES (
:login, :pass, :email, :firstname, :lastname, :sign )";
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(':login',$row[0][$sign_login]);
            $stmt->bindParam(':pass',$row[0][$sign_pass]);
            $stmt->bindParam(':email',$row[0][$sign_email]);
            $stmt->bindParam(':firstname',$row[0][$sign_first]);
            $stmt->bindParam(':lastname',$row[0][$sign_last]);
            $stmt->bindParam(':sign',$row[0][$sign_sig]);
            $stmt->execute();
            $result = $stmt->fetch();
// Delete row from signup table
            $sql = "DELETE FROM " . $sign_table . "
WHERE " . $sign_id . "= :id";
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(':id', $row[0][$sign_id]);
            $stmt->execute();
        }
        catch (PDOException $e)
        {
            throw new SignUpDatabaseException('Database error when' .
                '
inserting user info: '.$e->getMessage());
        }
    }
}