<?php

class user extends DatabaseObject
{
    protected  $_id;
    protected  $_firstname;
    protected  $_lastname;
    protected  $_cc;
    protected  $_email;
    protected  $_user_id;
    protected  $_user_name;
    protected  $_birthday;
    protected  $_city;
    protected  $_date_joined;
    protected  $_gender;
    protected  $_notifications;
    protected  $_state;
    protected  $_status;

    public function __construct($db){

        parent::__construct($db,'user','id');
        //$this->_id = $id;
    }


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
    public function getBirthday()
    {
        return $this->_birthday;
    }

    /**
     * @param mixed $birthday
     */
    public function setBirthday($birthday)
    {
        $this->_birthday = $birthday;
    }

    /**
     * @return mixed
     */
    public function getCity()
    {
        return $this->_city;
    }

    /**
     * @param mixed $city
     */
    public function setCity($city)
    {
        $this->_city = $city;
    }

    /**
     * @return mixed
     */
    public function getDateJoined()
    {
        return $this->_date_joined;
    }

    /**
     * @param mixed $date_joined
     */
    public function setDateJoined($date_joined)
    {
        $this->_date_joined = $date_joined;
    }

    /**
     * @return mixed
     */
    public function getGender()
    {
        return $this->_gender;
    }

    /**
     * @param mixed $gender
     */
    public function setGender($gender)
    {
        $this->_gender = $gender;
    }

    /**
     * @return mixed
     */
    public function getNotifications()
    {
        return $this->_notifications;
    }

    /**
     * @param mixed $notifications
     */
    public function setNotifications($notifications)
    {
        $this->_notifications = $notifications;
    }

    /**
     * @return mixed
     */
    public function getState()
    {
        return $this->_state;
    }

    /**
     * @param mixed $state
     */
    public function setState($state)
    {
        $this->_state = $state;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->_status;
    }

    /**
     * @param mixed $status
     */
    public function setStatus($status)
    {
        $this->_status = $status;
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