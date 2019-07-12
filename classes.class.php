<?php
/**
 * Created by PhpStorm.
 * User: goldenboy
 * Date: 7/6/2019
 * Time: 1:46 AM
 */

class classes
{

    private    $classid;
    private    $name;
    private    $price;
    private    $description;
    private    $category;
    private    $date_purchased;
    private    $videoId;
    private    $trackingId;
    /**
     * classes constructor.
     */
    public function __construct()
    {
    }

    public function __toString()
    {
        // TODO: Implement __toString() method.
    }

    /**
     * @return mixed
     */
    public function getClassid()
    {
        return $this->classid;
    }

    /**
     * @param mixed $classid
     */
    public function setClassid($classid)
    {
        $this->classid = $classid;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param mixed $category
     */
    public function setCategory($category)
    {
        $this->category = $category;
    }

    /**
     * @return mixed
     */
    public function getDatePurchased()
    {
        return $this->date_purchased;
    }

    /**
     * @param mixed $date_purchased
     */
    public function setDatePurchased($date_purchased)
    {
        $this->date_purchased = $date_purchased;
    }

    /**
     * @return mixed
     */
    public function getVideoId()
    {
        return $this->videoId;
    }

    /**
     * @param mixed $videoId
     */
    public function setVideoId($videoId)
    {
        $this->videoId = $videoId;
    }

    /**
     * @return mixed
     */
    public function getTrackingId()
    {
        return $this->trackingId;
    }

    /**
     * @param mixed $trackingId
     */
    public function setTrackingId($trackingId)
    {
        $this->trackingId = $trackingId;
    }

    public function getClassList(){

    }

    public function getClass(){

    }

    public function getCategoryList(){s

    }

    public function getCategory(){

    }

}