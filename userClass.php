<?php
/**
 * Created by PhpStorm.
 * User: goldenboy
 * Date: 4/21/2015
 * Time: 5:32 AM
 */

class userClass {

    protected  $_id;
    protected  $_firstname;
    protected  $_lastname;
    protected  $_cc;
    protected  $_email;

    public function __construct(){
      //  $this->_id = $id;
    }

    public function getId(){
        return $this->_id;
    }

    public function setId($id){
        $this->_id = $id;
    }

    public function getFirstName(){
        return $this->_firstname;
    }

    public function setFirstName($firstname){
        $this->_firstname = $firstname;
    }

    public function getLastName(){
        return $this->_lastname;
    }

    public function setLastName($lastname){
        $this->_lastname = $lastname;
    }

    public function getCC(){
        return $this->_cc;
    }

    public function setCC($cc){
        $this->_cc = $cc;
    }

    public function getEmail(){
        return $this->_email;
    }

    public function setEmail($email){
        $this->_email = $email;
    }
} 