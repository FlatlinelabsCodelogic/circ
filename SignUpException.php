<?php
/**
 * Created by PhpStorm.
 * User: goldenboy
 * Date: 3/2/2015
 * Time: 6:00 AM
 */

class SignUpException extends Exception
{
    public function __construct($message = null, $code = 0)
    {
        parent::__construct($message, $code);
        error_log('Error in '.$this->getFile().
            ' Line: '.$this->getLine().
            ' Error: '.$this->getMessage()
        );
    }
}
class SignUpDatabaseException extends SignUpException {}
class SignUpNotUniqueException extends SignUpException {}
class SignUpEmailException extends SignUpException {}
class SignUpConfirmationException extends SignUpException {}