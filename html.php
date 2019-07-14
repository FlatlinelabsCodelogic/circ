<?php
/**
 * Created by PhpStorm.
 * User: goldenboy
 * Date: 3/20/15
 * Time: 6:24 AM
 */

class html {


    const DOCTYPE = '<!DOCTYPE html>';
    const sHTML = '<html>';
    const eHTML = '</html>';
    const sHEAD = '<head>';
    const eHEAD = '</head>';
    const sBODY = '<body>';
    const eBODY = '</body>';
    const BR    = '<br>';

    const typeTEXT  = "text";
    const typePASSWORD = "password";
    const typeHIDDEN = "hidden";
    const typeDATE = "date";
    const typeEMAIL = "email";
    const typeTEXTAREA = "textarea";
    const typeNUMBER = "number";
    const typeMONTH = "month";
    const typeTEL = "tel";

    const f1Placeholder = "Username";
    const f2Placeholder = "Email";
    const f3Placeholder = "Password";
    const f4Placeholder = 'Confirm password';

    const f5Placeholder = "First Name";
    const f6Placeholder = "Last Name";
    const f7Placeholder = "City";
    const f8Placeholder = "State";

    const f9Placeholder = "Credit Card";
    const f10Placeholder = "Expiration Date (MM/YY)";
    const f11Placeholder = "CVV";
    const f12Placeholder = "Zipcode";

    const f13Placeholder = "Phone";
    const f14Placeholder = "Address";
    const f15Placeholder = "Zoom ID";
    const f16Placeholder = "Referral Code";

    const f1type = self::typeTEXT;
    const f2type = self::typeEMAIL;
    const f3type = self::typePASSWORD;
    const f4type = self::typePASSWORD;

    const f5type = self::typeTEXT;
    const f6type = self::typeTEXT;
    const f7type = self::typeTEXT;
    const f8type = self::typeTEXT;

    const f9type = self::typeNUMBER;
    const f10type = self::typeTEXT;
    const f11type = self::typeNUMBER;
    const f12type = self::typeNUMBER;

    const f13type = self::typeTEL;
    const resetScript = "http://localhost/circ/lostPasswordResetDB.php";


} 