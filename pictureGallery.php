<?php
include 'Display.php';
$disp = new Display();?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
         <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
        <title></title>
        <link rel="stylesheet" href="css/editZone.css" type="text/css"/>
    </head>
    <body style="max-height: 500px;max-width: 500px;">
        <div id="galleryContainerDiv">
            <?php echo $disp->displayImgFrmSrvr() ?>
        </div>
        <div id="uploadDiv">
            <form action="upload.php" method="post" enctype="multipart/form-data">
                <div id="brwButtonDiv">
                    <input type="file" id="brwButton" name="img" accept="image/*">
                </div>
                <div id="uploadButtonDiv">
                    <input type="submit" id="uploadButton" value="Upload">
                </div>
            </form>
        </div>
    </body>
</html>
