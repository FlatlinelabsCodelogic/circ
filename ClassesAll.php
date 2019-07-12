<?php

session_start();
spl_autoload_register();

$db = new MysqliDb('localhost','circ','circ','circ');
$tq = "SELECT * FROM video";
$classList = $db->rawQuery($tq);
//var_dump($classList);

echo html::DOCTYPE;
echo html::BR;

echo html::sHTML;

echo html::sHEAD;

?>

    <meta charset='UTF-8'>
    <title>TITLE</title>
    <script src="http://thecodeplayer.com/uploads/js/jquery-1.9.1.min.js" type="text/javascript"></script>
    <!-- jQuery easing plugin -->
    <script src="bootstrap/dist/js/bootstrap.js"></script>
    <link rel="stylesheet" href="bootstrap/dist/css/bootstrap.css">
    <script src="http://thecodeplayer.com/uploads/js/jquery.easing.min.js" type="text/javascript"></script>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/signup.css">
    <script type="text/javascript"  src="js/signup.js"></script>
    <link rel="stylesheet" href="css/lostPassword.css">

<?php
echo html::eHEAD;
//echo html::sBODY;

?>
<body style="background-color:#000000;font-family: roboto;">

<!--    <div style="margin-left:20px;margin-bottom:100px;">-->

<div class="header">
    <div class="container">
        <div class="logo-menu">
            <!--<div class="logo">
                <h1><a href="index.php">img src="images/logo_sm2.png" width="53" height="52" /</a></h1>
        </div>-->
            <!--<a id="simple-menu" href="#sidr">Toggle menu</a>-->
            <!--<div id="mobile-header">
                <a class="responsive-menu-button" href="#"><img src="images/11.png"/></a>
            </div>-->
            <div class="menu" id="navigation">
                <ul>
                    <!--                    	<li><a href="signup1.php">Join Today</a></li>-->
                    <li><a href="index.php">HOME</a></li>

                </ul>
            </div>
        </div>
    </div>

    <div class="container">

            <div class="header-text" style="text-align:center;margin-top:50px;">
                <h1><a href="index.php" STYLE="text-decoration: none;">L O G O</a></h1>
            </div>
            <h1 style="text-align:center;">AVAILABLE VIDEOS</h1>


</div>
    <br><br>
            <div class="container">
        <div class="row">
            <?php
               foreach($classList as $c){ ?>
                   <div class="col-md-4" style="height:490px;margin-top:50px;">
                     <div class="panel panel-default">
                         <div class="panel-heading">
                             <h1 style="font-weight:600;margin-top:10px;" class="panel-title"><?php echo strstr($c['name'], ".", true)?></h1>
                        <div class="panel-body">
                            <div class="row">
                               <div style="font-weight:600" class="col-md-2">$<?=$c['tuition']?></div>
                                <!--                        </div>-->

                                    <div style="margin-bottom:10px;float:right;margin-right:15px;font-weight:600"><?= $c['duration'] ?> Minutes</div>
                                    <div class="col-md-12">
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <?php if(@file_get_contents('video/thumbnails/'.strstr($c['name'], ".", true).'.jpg')){ ?>
                                         <img style="width:100%;" src="<?php echo 'video/thumbnails/'.strstr( $c['name'], ".", true).'.jpg' ?>"></img>
                                    <?php }else{ ?>
                                         <img style="width:238px;height:135px;" src="<?php echo 'video/thumbnails/default.jpg' ?>"></img>
                                    <?php } ?>
                                </div>
                            <div class="col-md-12" style="height:185px;overflow:hidden;">
                                <h4 style="margin-top:20px;">Description</h4>
                                <p><?=$c['description']?></p>
                            </div>
                            <div>
                                <form >

                                    <button  style="margin-top:30px;float:right;" type="button" class="btn btn-success start" data-ng-click="submit()">
                                        <i class="glyphicon glyphicon-upload"></i>
                                        <span>Watch</span>
                                    </button>
                                </form>
                            </div>
                        </div>
                     </div>
                 </div>
                 </div>
                <?php } ?>
<!--                    <?php
/*                foreach($classList as $class){ */?>
                    <div class="col-md-4" style="background-color:#cccccc;border:1px solid #333333;margin-right:15px;height:490px">
                        <div class="row">
                            <div style="height:50px;padding-left:20px;font-weight:600;margin-top:10px;" class="col-md-10"><h4><?php /*echo strstr( $class['name'], ".", true)*/?></h4></div>
                            <div style="padding-top:20px;margin-left:-20px;font-weight:600" class="col-md-2">$<?/*=$class['tuition']*/?></div>
                      </div>-->


    </div>
            </div>

    </div>



<script src="js/jquery.min.js"></script>
<script src="js/angular.min.js"></script>
<!-- The jQuery UI widget factory, can be omitted if jQuery UI is already included -->
<script src="js/vendor/jquery.ui.widget.js"></script>
<!-- The Load Image plugin is included for the preview images and image resizing functionality -->
<script src="js/load-image.all.min.js"></script>
<!-- The Canvas to Blob plugin is included for image resizing functionality -->
<script src="js/canvas-to-blob.min.js"></script>
<!-- Bootstrap JS is not required, but included for the responsive demo navigation -->
<script src="js/bootstrap.min.js"></script>
<!-- blueimp Gallery script -->
<script src="js/jquery.blueimp-gallery.min.js"></script>
<!-- The Iframe Transport is required for browsers without support for XHR file uploads -->
<script src="js/jquery.iframe-transport.js"></script>
<!-- The basic File Upload plugin -->
<script src="js/jquery.fileupload.js"></script>
<!-- The File Upload processing plugin -->
<script src="js/jquery.fileupload-process.js"></script>
<!-- The File Upload image preview & resize plugin -->
<script src="js/jquery.fileupload-image.js"></script>
<!-- The File Upload audio preview plugin -->
<script src="js/jquery.fileupload-audio.js"></script>
<!-- The File Upload video preview plugin -->
<script src="js/jquery.fileupload-video.js"></script>
<!-- The File Upload validation plugin -->
<script src="js/jquery.fileupload-validate.js"></script>
<!-- The File Upload Angular JS module -->
<script src="js/jquery.fileupload-angular.js"></script>
<!-- The main application script -->
<script src="js/app.js"></script>

<?php


echo html::eBODY;
echo html::eHTML;