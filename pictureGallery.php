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
        <title></title>
        <link rel="stylesheet" href="css/editZone.css" type="text/css"/>
    </head>
    <body style="max-height: 500px;max-width: 500px;">
        <div id="galleryContainerDiv">
            <?php echo $disp->displayImgFrmSrvr() ?>
        </div>
    </body>
</html>
