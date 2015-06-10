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
    </head>
    <body>
        <div id="galleryContainerDiv">
            <?php echo $disp->displayImgFrmSrvr() ?>
        </div>
    </body>
</html>
