<?php
session_start();
include 'Display.php';
$disp = new Display();
header("Expires: Tue, 01 Jan 2000 00:00:00 GMT");
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
if(!isset($_SESSION['sess_username']))
{
   header("Location:login.html");
}
        ?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link rel='stylesheet' href='main.css' type='text/css'/>
        <title>Welcome to the Employee Dashboard</title>
    </head>
    <body>
        <div id="headerZone">
            <div id="bannerZone">
                <div class="imgWrapper">
                    <img alt="banner" src="img/Sals_Dollar_Banner.jpg"/>
                </div>
            </div>
            <div id="navZone">
                 <?php echo $disp->displayNav(array(
                                                        array(
                                                            'Edit Ad Zones',
                                                            'http://www.google.com',
                                                            1,
                                                            'editZones()'
                                                        ),
                                                        array(
                                                            
                                                            'Logout',
                                                            'logout.php'
                                                        )
                                                        
                 ));?>
            </div>
        </div>
    </body>
</html>
