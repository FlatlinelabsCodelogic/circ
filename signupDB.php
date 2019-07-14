<?php
session_start();
// -> All classes in directory
foreach(glob('classes/*.class.php') as $file) {
    require_once($file);
}

// Autoload class definitions
function my_autoload($class) {
    if(preg_match('/\A\w+\Z/', $class)) {
        include('classes/' . $class . '.class.php');
    }
}
spl_autoload_register('my_autoload');

//require_once("MysqliDb.php");
//require_once("user.class.php");
//require_once("referral.class.php");


parse_str(http_build_query($_POST), $post);
parse_str($post['data']);

$db = new MysqliDb('localhost', 'circ', 'circ', 'circ');
$data = array(
    'firstName'    =>      $f5,
    'lastName'     =>      $f6,
    'email'        =>      $f2,
    'city'         =>      $f7,
    'state'        =>      $f8,
    'phone'        =>      $f13
);
$id = $db->insert('user', $data);

$user = new User($db);
    $user->_firstname = $data['firstName'];
    $user->_lastname = $data['lastName'];
    $user->_email = $data['email'];
    $user->_city = $data['city'];
    $user->_state = $data['state'];
    $user->_phone = $data['phone'];
    $user->_user_name = $f1;

unset($data);

$data = array(
    'card_number'   =>  md5($f9),
    'cvv'           =>  $f11,
    'zip'           =>  $f12,
    'user_id'       =>  $id
);
$cid = $db->insert('credit_card', $data);

$creditcard = new CreditCard();
$creditcard->_cardnumber = $data['card_number'];
$creditcard->_cvv = $data['cvv'];
$creditcard->_userId = $data['user_id'];
$creditcard->_zip = $data['zip'];

unset($data);
$data = array(
    'user_name'     =>  $f1,
    'user_password' =>  md5($f3),
    'user_id'       =>  $id
);
$aid = $db->insert('access', $data);

$access = new Access();
$access->_user_id   = $data['user_id'];
$access->_user_name = $data['user_name'];
$access->_user_password = $data['user_password'];

unset($data);

$data = array(
    'referral_user_id'  => $referral->getReferralUser($db),
    'referral_code'     => $f16
);

$rid = $db->insert('referral', $data);

$referral = new Referral();
$referral->_referralCode = $f16;
$referral->_referralUser = $referral->getReferralUser($db);

$_SESSION['user_id'] = $id;
$_SESSION['userObject'] = serialize($user);
$_SESSION['creditcardObject'] = serialize($CreditCard);
$_SESSION['authenticated'] = $f1;
die("success");



