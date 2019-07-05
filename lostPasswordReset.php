<?php
session_start();


require_once("user.class.php");
require 'html.php';



echo html::DOCTYPE;
echo html::BR;
echo html::sHTML;
echo html::sHEAD;
?>
    <meta charset="UTF-8">
    <title>TITLE</title>
    <script src="http://thecodeplayer.com/uploads/js/jquery-1.9.1.min.js" type="text/javascript"></script>
    <!-- jQuery easing plugin -->
    <script src="http://thecodeplayer.com/uploads/js/jquery.easing.min.js" type="text/javascript"></script>
    <link rel="stylesheet" href="css/lostPassword.css">
    <script type="text/javascript"  src="js/lostPassword.js"></script>
<?php
echo html::eHEAD;
echo html::sBODY;
?>
    <div class="container">
        <form id="lpform">
            <div class="header-text">
                <h1><a href="index.php" STYLE="text-decoration: none;">L O G O</a></h1>
            </div>
            <h1>RESET PASSWORD</h1>
            <!-- progressbar -->
            <!-- fieldsets -->
            <fieldset>
                <div style="margin-top:10px;margin-bottom:10px;">
                    <div class="error1"> &nbsp;</div>
                </div>
                <div style="margin-top:-10px;margin-bottom:15px;font-size:15px;text-align:left;font-family: roboto;">Enter and confirm your new password.</div>
                <input type="<?=html::typePASSWORD?>" id="resetPassword" name="resetPassword" placeholder="Password" />
                <input type="<?=html::typePASSWORD?>" id="resetPasswordConfirm" name="resetPasswordConfirm" placeholder="Confirm" />
                <input type="submit" id="forgotReset" name="forgotReset" class="forgotReset action-button3" value="Confirm" />
                <input type="<?=html::typeHIDDEN?>" id="uid" name="uid" value="<?=$_GET['uid']?>" />
            </fieldset>
            <!--<div style="padding-top:300px;color:#ffffff;">
                <p><a href="#" style="float:left;text-decoration:none;color:#ffffff;font-size:12px;">Forgot Password ?</a><a href="signup.php" style="float:right;text-decoration:none;color:#ffffff;font-size:12px;">Not a Member ?</a></p>
            </div>-->

        </form>

    </div>
    <div class="container">
        <p style="margin-top:20px;margin-bottom:20px;">&nbsp;</p>

    </div>

<?php


echo html::eBODY;

echo html::eHTML;