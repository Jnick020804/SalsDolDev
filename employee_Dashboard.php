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
        <div id='DbBodyWrapper'>
            <div id='DbBody'>
                <div class='welcomeText'>
                    <p class='welcome'>
                        Welcome to the Sal's Dollar Dashboard. Here you can Edit the Ad zones 
                        over the entire site. When you click on the "Edit Ad Zones" Button
                        a menu will appear. Select the Ad Zone that you would like to edit and then
                        select the content that you would like to display in it. Make sure you pay
                        attention to any constraints such as max picture size and text length.
                    </p>
                </div>
            </div>
        </div>
        <div id="adNav">
            <?php echo $disp->displayMenu(array(
                    array('Top Left Zone','showEditWindow(this.id)','topLeftMsg'),
                    array('Top Right Zone','showEditWindow(this.id)','topRightMsg'),
                    array('Mid Top Zone','showEditWindow(this.id)','midTopMsg'),
                    array('Mid Btm Zone','showEditWindow(this.id)','midBtmMsg'),
                    array('Inner Top Zone','showEditWindow(this.id)','innerTopMsg'),
                    array('Inner Bottom Zone','showEditWindow(this.id)','innerBtmMsg'),
                    array('Middle Slide 1','showEditWindow(this.id)','slide1'),
                    array('Middle Slide 2','showEditWindow(this.id)','slide2'),
                    array('Middle Slide 3','showEditWindow(this.id)','slide3'),
                    array('Right Third Zone','showEditWindow(this.id)','rightThirdMsg'),
                    array('Bottom Slide 1','showEditWindow(this.id)','inslide1'),
                    array('Bottom Slide 2','showEditWindow(this.id)','inslide2'),
                    array('Bottom Slide 3','showEditWindow(this.id)','inslide3'),
                    array('Bottom Slide 4','showEditWindow(this.id)','inslide4'),
                    array('Bottom Slide 5','showEditWindow(this.id)','inslide5'),
                    array('Bottom Slide 6','showEditWindow(this.id)','inslide6'),
                    array('Bottom Slide 7','showEditWindow(this.id)','inslide7'),
                    array('Bottom Slide 8','showEditWindow(this.id)','inslide8'),
                    array('Bottom Slide 9','showEditWindow(this.id)','inslide9'),
                    array('Bottom Slide 10','showEditWindow(this.id)','inslide10'),
                    array('Bottom Left Zone','showEditWindow(this.id)','btmLeftThirdMsg'),
                    array('Bottom Mid Zone','showEditWindow(this.id)','btmMidThirdMsg'),
                    array('Bottom Right Zone','showEditWindow(this.id)','btmRightThirdMsg'))); ?>
        </div>
    </body>
</html>
