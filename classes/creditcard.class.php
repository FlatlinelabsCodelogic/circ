<?php
/**
 * Created by PhpStorm.
 * User: goldenboy
 * Date: 7/13/2019
 * Time: 2:01 AM
 */

class CreditCard
{
    public   $_cardnumber;
    public   $_cvv;
    public   $_zip;
    public   $_userId;

    /**
     * @return mixed
     */
    public function getCardnumber()
    {
        return $this->_cardnumber;
    }

    /**
     * @param mixed $cardnumber
     */
    public function setCardnumber($cardnumber)
    {
        $this->_cardnumber = $cardnumber;
    }

    /**
     * @return mixed
     */
    public function getCvv()
    {
        return $this->_cvv;
    }

    /**
     * @param mixed $cvv
     */
    public function setCvv($cvv)
    {
        $this->_cvv = $cvv;
    }

    /**
     * @return mixed
     */
    public function getZip()
    {
        return $this->_zip;
    }

    /**
     * @param mixed $zip
     */
    public function setZip($zip)
    {
        $this->_zip = $zip;
    }

    /**
     * @return mixed
     */
    public function getUserId()
    {
        return $this->_userId;
    }

    /**
     * @param mixed $userId
     */
    public function setUserId($userId)
    {
        $this->_userId = $userId;
    }




}