
<?php
/**
 * Created by PhpStorm.
 * User: goldenboy
 * Date: 3/29/2015
 * Time: 7:02 AM
 */

class Request {


    private $properties;
//    private $regData = array();
//    private $regData = array();

    function __construct(){
  //      $request = new Request();
//        parse_str($_POST['data']);
       $this->init();


    }

   function init()
    {
        if (isset ($_SERVER['REQUEST_METHOD'])) {
            $this->properties = $_REQUEST;
            return;
        }


        foreach ($_SERVER['argv'] as $arg) {
            if (strpos($arg, '=' ) ) {
                list( $key, $val ) = explode("-", $arg);
                $this->setProperty($key, $val);
            }
        }
    }

    function getProperty( $key ) {
        if ( isset( $this->properties[$key] ) ) {
            return $this->properties[$key];
        }
        return null;
    }

    function setProperty( $key, $val ) {
        $this->properties[$key] = $val;
    }

}