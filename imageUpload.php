<?php
session_start();

//require 'html.php';

?>
<!DOCTYPE HTML>

<html lang="en">
<head>
<!-- Force latest IE rendering engine or ChromeFrame if installed -->
<!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
<meta charset="utf-8">
<title></title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Bootstrap styles -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<!-- Generic page styles -->
<link rel="stylesheet" href="css/style.css">
<!-- CSS to style the file input field as button and adjust the Bootstrap progress bars -->
<link rel="stylesheet" href="css/jquery.fileupload.css">
<link rel="stylesheet" href="css/lostPassword.css">
<script type="text/javascript"  src="js/lostPassword.js"></script>
<style>
    body{ background-color:#000000;}
</style>

</head>

<?php
//echo html::sBODY;
?>
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
                <li><a href="#">Dashboard</a></li>

            </ul>
        </div>
    </div>
</div>


    <div class="container">

        <form id="fileupload">
            <div class="header-text">
                <h1><a href="index.php" STYLE="text-decoration: none;color:#1c97ca;">L O G O</a></h1>

            </div>
            <h1>IMAGE UPLOAD</h1>

            <!-- Redirect browsers with JavaScript disabled to the origin page -->
            <fieldset>
    <!-- The fileinput-button span is used to style the file input field as button -->
    <span class="btn btn-success fileinput-button" style="height:36px;width:200px;font-size:18px;font-family:Roboto;background-color:#1c97ca;border:0 none;">
        <i class="glyphicon glyphicon-plus"></i>
        <span>Select file</span>
        <!-- The file input field used as target for the file upload widget -->
        <input id="fileupload" type="file" name="files[]" multiple>
    </span>
    <br>
    <br>
    <!-- The global progress bar -->
    <div id="progress" class="progress" style="background-color:rgba(28,198,255,0.25);">
        <div class="progress-bar progress-bar-success" style="background-color:#1c97ca;"></div>
    </div>
    <!-- The container for the uploaded files -->
    <div id="files" class="files"></div>
    <br>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Note</h3>
        </div>
        <div class="panel-body">
            <ul>
                <li>The maximum file size for uploads is <strong>999 KB</strong>.</li>
                <li>Only image files (<strong>JPG, GIF, PNG</strong>) are allowed.</li>
                <li>You can <strong>drag &amp; drop</strong> a file from your desktop on this webpage to upload.</li>

            </ul>
        </div>
    </div>
            </fieldset>
    </form>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js" integrity="sha384-xBuQ/xzmlsLoJpyjoggmTEz8OWUFM0/RC5BsqQBDX2v5cMvDHcMakNTNrHIW2I5f" crossorigin="anonymous"></script>
<!-- The jQuery UI widget factory, can be omitted if jQuery UI is already included -->
<script src="js/vendor/jquery.ui.widget.js"></script>
<!-- The Iframe Transport is required for browsers without support for XHR file uploads -->
<script src="js/jquery.iframe-transport.js"></script>
<!-- The basic File Upload plugin -->
<script src="js/jquery.fileupload.js"></script>
<!-- Bootstrap JS is not required, but included for the responsive demo navigation -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script>
/*jslint unparam: true */
/*global window, $ */
$(function () {
    'use strict';
    // Change this to the location of your server-side upload handler:
    var url = window.location.hostname === 'blueimp.github.io' ?
                '//jquery-file-upload.appspot.com/' : 'server/php/';
    $('#fileupload').fileupload({
        url: url,
        dataType: 'json',
        done: function (e, data) {
            $.each(data.result.files, function (index, file) {
                $('<p/>').text(file.name).appendTo('#files');
            });
        },
        progressall: function (e, data) {
            var progress = parseInt(data.loaded / data.total * 100, 10);
            $('#progress .progress-bar').css(
                'width',
                progress + '%'
            );
        }
    }).prop('disabled', !$.support.fileInput)
        .parent().addClass($.support.fileInput ? undefined : 'disabled');
});
</script>
</body>
</html>
