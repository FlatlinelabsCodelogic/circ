<?php
class DatabaseObject_User extends DatabaseObject
{
    static $uypes = array('member' => 'Member',
                          'administrator' => 'Administrator');

    public $profile = null;

    public function __construct($db)
    {
        parent::__construct($db, 'users', 'uid');

        $this->add('email');
        $this->add('password');
        $this->add('utype', 'member');
//        $this->add('ts_created', time(), self::TYPE_TIMESTAMP);
//        $this->add('ts_last_login', null, self::TYPE_TIMESTAMP);

        $this->profile = new Profile_User($db);
    }

  /*  protected function preInsert()
    {
        $this->password = uniqid();
        return true;
    }

    protected function postLoad()
    {
        $this->profile->setUserId($this->getId());
        $this->profile->load();
    }

    protected function postInsert()
    {
        $this->profile->setUserId($this->getId());
        $this->profile->save(false);
        return true;
    }

    protected function postUpdate()
    {
        $this->profile->save(false);
        return true;
    }

    protected function preDelete()
    {
        $this->profile->delete();
        return true;
    }*/

    public function __set($name, $value)
    {
   /*     switch ($name) {
            case 'password':
                $value = md5($value);
                break;

            case 'user_type':
                if (!array_key_exists($value, self::$userTypes))
                    $value = 'member';
                break;
        }

        return parent::__set($name, $value);*/
    }

    public function emailExists($semail)
    {
        $q = "select count(*) as num from signup where email = '$semail'";
        $r = $this->_db->query($q);
        return $r['num'] > 0;  // true if in use ? false

    }
}
?>