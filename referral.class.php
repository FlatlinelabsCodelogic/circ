<?php


class Referral
{


    //rivate $referralCode;
    private $db;

    public function __construct() {

    }

    /**
     * @return mixed
     */
    public function getReferralCode()
    {
        return $this->referralCode;
    }

    /**
     * @param mixed $referralCode
     */
    public function setReferralCode($referralCode)
    {
        $this->referralCode = $referralCode;
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