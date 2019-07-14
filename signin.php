<?php
session_start();

require 'Request.php';
require 'html.php';
//require_once("user.class.php");

/// add composer and autoload

//$request = new Request();
//$htdoc = new html();

//$db = new MySQLi('localhost', 'circ', 'circ', 'circ');
//$user = new user($db);

//echo html::DOCTYPE;
//echo html::BR;

//echo html::sHTML;

//echo html::sHEAD;
//echo "<head>";

?>
    <!DOCTYPE HTML>

    <html lang="en">
    <head>
    <meta charset="UTF-8">
    <title>TITLE</title>
        <script src="js/jquery.js"></script>

        <script src="http://thecodeplayer.com/uploads/js/jquery-1.9.1.min.js" type="text/javascript"></script>
    <!-- jQuery easing plugin -->
    <script src="http://thecodeplayer.com/uploads/js/jquery.easing.min.js" type="text/javascript"></script>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/lostPassword.css">
    <link rel="stylesheet" href="css/signup.css">
<!--    <script type="text/javascript"  src="js/signup.js"></script>-->
</head>
<body>


<div class="header">
    <div class="container">
        <div class="logo-menu">
            <!--<div class="logo">
                <h1><a href="index.php"><!-- img src="images/logo_sm2.png" width="53" height="52" / --></a></h1>
        </div>-->
        <!--<a id="simple-menu" href="#sidr">Toggle menu</a>-->
        <!--<div id="mobile-header">
            <a class="responsive-menu-button" href="#"><img src="images/11.png"/></a>
        </div>-->
        <div class="menu" id="navigation">
            <ul>
                <!--                    	<li><a href="signup1.php">Join Today</a></li>-->
                <li><a href="index.php">Home</a></li>

            </ul>
        </div>
    </div>
</div>
    <div class="container" style="padding-top:5px;">

        <form id="siform">
            <div class="header-text">
                <h1><a href="index.php" STYLE="text-decoration: none;color:#1c97ca;">L O G O</a></h1>

            </div>
            <h1>SIGN IN</h1>
            <!-- progressbar -->
            <!-- fieldsets -->
            <fieldset>
                <div style="margin-top:10px;margin-bottom:10px;">
                    <div class="serror"> &nbsp;</div>
                </div>
                <input type="text" id="semail" name="semail" placeholder="Username" />
                <input type="password" id="spass" name="spass" placeholder="Password" />
                <input type="submit" id="signin" name="signin" class="signin action-button3" value="Go" />
            </fieldset>
            <div style="padding-top:300px;color:#ffffff;">
                <p><a href="lostPassword.php" style="float:left;text-decoration:none;color:#ffffff;font-size:12px;">Forgot Password ?</a><a href="signup.php" style="float:right;text-decoration:none;color:#ffffff;font-size:12px;">Not a Member ?</a></p>
            </div>

        </form>

    </div>
    <div class="container">
        <p style="margin-top:20px;margin-bottom:20px;">&nbsp;</p>

    </div>

<?php


echo html::eBODY;

echo html::eHTML;