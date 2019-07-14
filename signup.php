<?php
session_start();
//echo "<pre>";
//if(isset($_SESSION['refferalObject'])) {
//    print_r(unserialize($_SESSION['refferalObject']));
//}
//if(isset($_SESSION['userObject'])) {
//}
//    print_r(unserialize($_SESSION['userObject']));
//echo "</pre>";


require 'html.php';
//require 'includes/signup.class.php';
//require 'Signup.php';


/// add composer and autoload

//$request = new Request();

//$signup = new \signup\signup();
//$htdoc = new html();


echo html::DOCTYPE;
echo html::BR;

echo html::sHTML;

echo html::sHEAD;
?>
    <meta charset="UTF-8">
    <title>TITLE</title>
    <script src="js/jquery-1.9.1.min.js" type="text/javascript"></script>
    <!-- jQuery easing plugin -->
    <script src="js/jquery.easing.min.js" type="text/javascript"></script>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/signup.css">
    <script type="text/javascript"  src="js/signup.js"></script>
<?php
echo html::eHEAD;

echo html::sBODY;
?>
    <div class="header">
        <div class="container">
            <div class="logo-menu">
                <!--<div class="logo">
                    <h1><a href="index.php"><!-- img src="images/logo_sm2.png" width="53" height="52" / </a></h1>
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
    </div>
    <div class="container">
        <form id="msform">
                <h1><a href="index.php" STYLE="text-decoration: none;color:#1c97ca;">L O G O</a></h1>
            <h1>SIGN UP</h1>
            <!-- progressbar -->
            <ul id="progressbar">
                <li class="active"> </li>
                <li> </li>
                <li> </li>
            </ul>
            <!-- fieldsets -->
            <fieldset>
                <div style="margin-top:5px;margin-bottom:5px;">
                    <div class="error1"> &nbsp;</div>
                </div>
                <?php
                if(html::f5Placeholder) {
                    ?><input type=<?=html::f5type?> id="f5" name="f5" placeholder="<?=html::f5Placeholder?>" ><?php
                }
                if(html::f6Placeholder) {
                    ?><input type=<?=html::f6type?> id="f6" name="f6" placeholder="<?=html::f6Placeholder?> "><?php
                }
                if(html::f14Placeholder) {
                    ?><input type=<?=html::typeTEXT?> id="f14" name="f14" placeholder=<?=html::f14Placeholder?> ><?php
                }
                if(html::f7Placeholder) {
                    ?><input type=<?=html::f7type?> id="f7" name="f7" placeholder=<?=html::f7Placeholder?> ><?php
                }
                if(html::f8Placeholder) {
                    ?><input type=<?=html::f8type?> id="f8" name="f8" placeholder=<?=html::f8Placeholder?> ><?php
                }

                if(html::f13Placeholder) {
                    ?><input type=<?=html::f13type?> id="f13" name="f13" placeholder=<?=html::f13Placeholder?> ><?php
                }
                ?>
                <input type="button" name="next" class="next action-button" value="Continue" />
                <div style="clear:both;">&nbsp;</div>
                <div style=";margin-top:-10px;margin-bottom:10px;font-size:9px;margin-left:-20px;">By signing up, you agree to <a href="#">  <Title></Title>  Terms of Service</a></div>
            </fieldset>
            <fieldset>

                <div style="margin-top:10px;margin-bottom:10px;">
                    <div class="error2">&nbsp;</div>
                </div>
                <?php
                if(html::f1Placeholder) {
                    ?><input type=<?=html::f1type?> id="f1" name="f1" placeholder="<?=html::f1Placeholder?> "><?php
                }
                if(html::f2Placeholder) {
                    ?><input type=<?=html::f2type?> id="f2" name="f2" placeholder="<?=html::f2Placeholder?> "><?php
                }
                if(html::f15Placeholder) {
                    ?><input type=<?=html::typeTEXT?> id="f15" name="f15" placeholder="<?=html::f15Placeholder?>" ><?php
                }
                if(html::f3Placeholder) {
                    ?><input type=<?=html::f3type?> id="f3" name="f3" placeholder="<?=html::f3Placeholder?>" ><?php
                }
                if(html::f4Placeholder) {
                    ?><input type=<?=html::f4type?> id="f4" name="f4" placeholder="<?=html::f4Placeholder?> "><?php
                }


                ?>
                <!--<input type="text" id="f4" name="f4" placeholder="Address" />
                <input type="text" id="f5" name="f5" placeholder="Apt Number" />
                <input type="text" id="f6" name="f6" placeholder="Zip Code" />
                <textarea id="f7" name="f7" placeholder="Notes"></textarea>-->
                <input type="button" name="previous" class="previous action-button" value="Back" title="Back"/>
                <input type="button" name="next2" class="next2 action-button" value="Continue" />
                <div style="clear:both;">&nbsp;</div>
                <div style=";margin-top:-10px;margin-bottom:10px;font-size:9px;">By signing up, you agree to <a href="#">
                        <Title></Title> Terms of Service</a></div>
            </fieldset>
            <fieldset>

                <div style="margin-top:10px;margin-bottom:10px;">
                    <div class="error3">&nbsp;</div>
                </div>
                <?php
                if(html::f9Placeholder) {
                    ?><input type=<?=html::f9type?> id="f9" name="f9" placeholder="<?=html::f9Placeholder?> "><?php
                }
                ?>
                <div style=";margin-top:0px;margin-bottom:12px;padding:10px;font-size:14px;text-align:left;color: #1C97CA;
">There will be a $50.00 registration fee charged to your credit card after you complete the sign up process.</div>
                <?php
                if(html::f10Placeholder) {
                    ?><input type=<?=html::f10type?> id="f10" name="f10" placeholder="<?=html::f10Placeholder?>" ><?php
                }
                if(html::f11Placeholder) {
                    ?><input type=<?=html::f11type?> id="f11" name="f11" placeholder="<?=html::f11Placeholder?>" ><?php
                }
                if(html::f12Placeholder) {
                    ?><input type=<?=html::f12type?> id="f12" name="f12" placeholder="<?=html::f12Placeholder?>" ><?php
                }
                if(html::f16Placeholder) {
                    ?><input type=<?=html::typeTEXT?> id="f16" name="f16" placeholder="<?=html::f16Placeholder?>" ><?php
                }
                ?>

               <!-- <input type="text" id="f8" name="f8" placeholder="Card Number" />
                <input type="text" id="f9" name="f9" placeholder="Exp Mo" style="width:95px;" />
                <input type="text" id="f10" name="f10" placeholder="Exp Year"  style="width:160px;"/>
                <input type="text" id="f11" name="f11" placeholder="CVC"  style="width:95px;"  />
                <input type="text" id="f12" name="f12" placeholder="Zip"  style="width:160px;"  />-->
                <input type="button" name="previous" class="previous action-button" value="Back" title="Back"/>
                <input type="submit" name="submit" id="submit" class="submit action-button" value="Submit" />
                <div style="clear:both;">&nbsp;</div>
                <div style=";margin-top:-10px;margin-bottom:10px;font-size:9px;">By signing up, you agree to <a href="#"> <Title></Title> Terms of Service</a></div>


            </fieldset>

        </form>
    </div>
    <div class="container">
        <p style="margin-top:20px;margin-bottom:20px;">&nbsp;</p>

    </div>

<?php


echo html::eBODY;

echo html::eHTML;