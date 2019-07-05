<?php

session_start();

// require 'Request.php';
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
                    <div class="serror"> &nbsp;</div>
                </div>
                <div style="margin-top:-10px;margin-bottom:15px;font-size:16px;text-align:left;font-family: roboto;">Enter the email address you used when registering. A link to reset you password will emailed to you.</div>
                <input type="text" id="semail" name="semail" placeholder="Email" />
                <input type="submit" id="forgot" name="forgot" class="forgot action-button3" value="Reset" />
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