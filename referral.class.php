<?php


class Referral
{
    private $db;
    public $_referralCode;
    public $_referralUser;
    public $_isValid;
    public $_referralCount;

    public function __construct() {

    }

    /**
     * @return mixed
     */
    public function getisValid()
    {
        return $this->_isValid;
    }

    /**
     * @param mixed $isValid
     */
    public function setIsValid($isValid)
    {
        $this->_isValid = $isValid;
    }

    /**
     * @return mixed
     */
    public function getReferralCount()
    {
        return $this->_referralCount;
    }

    /**
     * @param mixed $referralCount
     */
    public function setReferralCount($referralCount)
    {
        $this->_referralCount = $referralCount;
    }

    /**
     * @return mixed
     */
    public function getReferralCode()
    {
        return $this->_referralCode;
    }

    /**
     * @param mixed $referralCode
     */
    public function setReferralCode($referralCode)
    {
        $this->_referralCode = $referralCode;
    }

    public function isValid($db){
        $db->where ("referral_code", $this->getReferralCode());
        $data = $db->get("referral");
        if ($db->count > 0){
            return True;
        }
    }

    public function getReferralUser($db){
        $db->where("referral_code", $this->getReferralCode());
        $data = $db->getOne("referral");
        if($db->count > 0){
            return $data['referral_user_id'];
        }

    }

    public function incrementReferralCount(){

    }

    public function payToPaidCheck(){

    }

    public function adjustMonthlyFee(){

    }

    public function __toString()
    {
        // TODO: Implement __toString() method.
    }
}