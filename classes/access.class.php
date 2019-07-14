<?php
/**
 * Created by PhpStorm.
 * User: goldenboy
 * Date: 7/13/2019
 * Time: 2:24 AM
 */



class Access
{
    public $_user_id;
    public $_user_name;
    public $_user_password;

    /**
     * @return mixed
     */
    public function getUserId()
    {
        return $this->_user_id;
    }

    /**
     * @param mixed $user_id
     */
    public function setUserId($user_id)
    {
        $this->_user_id = $user_id;
    }

    /**
     * @return mixed
     */
    public function getUserName()
    {
        return $this->_user_name;
    }

    /**
     * @param mixed $user_name
     */
    public function setUserName($user_name)
    {
        $this->_user_name = $user_name;
    }

    /**
     * @return mixed
     */
    public function getUserPassword()
    {
        return $this->_user_password;
    }

    /**
     * @param mixed $user_password
     */
    public function setUserPassword($user_password)
    {
        $this->_user_password = $user_password;
    }



}