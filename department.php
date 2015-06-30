<?php
include 'Display.php';
$disp = new Display();
$page=$_GET['id'];
$info = $disp->getInnerPageInfo($page);
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
        <title><?php echo $info['title']?></title>
        <link rel='stylesheet' href='css/main.css' type='text/css'/>
        <link rel='stylesheet' href='css/inner.css' type='text/css'/>
    </head>
    <body>
        <div id='headerZone'>
            <div id='bannerZone'>
                <div class="imgWrapper">
                    <img alt="banner" src="img/Sals_Dollar_Banner.jpg"/>
                </div>
            </div>
            <div id='navZone'>
                 <?php echo $disp->displayNav(array(
                                                    array('Home','index.php'),
                                                    array
                                                        (
                                                            'Household',
                                                            'department.php?id=household'
                                                        ),
                                                    array
                                                        (
                                                            'Pantry',
                                                            'department.php?id=pantry'
                                                        ),
                                                    array
                                                        (
                                                        
                                                            'Party Supplies',
                                                            'department.php?id=party_supply'
                                                        ),
                                                    array
                                                        (
                                                        
                                                            'Health & Beauty',
                                                            'department.php?id=hlth_beauty'
                                                        ),
                                                    array
                                                        (
                                                        
                                                            'Office & School',
                                                            'department.php?id=offc_sch'
                                                        ),
                                                    array
                                                        (
                                                        
                                                            'Toys & Crafts',
                                                            'department.php?id=toy_crfts'
                                                        ),
                                                    array
                                                        (
                                                        
                                                            'Seasonal & Holidays',
                                                            'department.php?id=ssnl_hldy'
                                                        ),
                                                    array
                                                        (
                                                        
                                                            'Apparel',
                                                            'department.php?id=apprl'
                                                        )));?>
            </div>
            
        </div>
        <div id='bodyWrapper'>
            
            <div id='bodyZone'>
                <div id="innerTopZone">
                    <div id="mainPicDiv">
                        <img src="<?php echo $info['mainPic'];?>">
                    </div>
                    <div id="sideTopDiv">
                        <div id="topSide">
                            <div id="topSideAdTitle">
                                <?php echo $info['side_top_ad']['title']?>
                            </div>
                            <div id="topSideDesc">
                                <?php echo $info['side_top_ad']['description']?>
                            </div>
                            <div id="topSideAdImg">
                                <img src="<?php echo $info['side_top_ad']['imgSrc']?>">
                            </div>
                            <div id="topSideAdLink">
                                <a href="<?php echo $info['side_top_ad']['link_Target']?>">
                                    <?php echo $info['side_top_ad']['link']?>
                                </a>
                            </div>
                        </div>
                        <div id="btmSide">
                            <div id="btmSideAdTitle">
                              <?php echo $info['side_btm_ad']['title']?>  
                            </div>
                            <div id="btmSideAdDesc">
                                <?php echo $info['side_btm_ad']['description']?> 
                            </div>
                            <div id="btmSideAdLink">
                                <a href="<?php echo $info['side_btm_ad']['link_Target']?>">
                                    <?php echo $info['side_btm_ad']['link']?>
                                </a>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <div id="innerMidZone">
                    <div id="descTitleDiv">
                        <span id="descTitle"><?php echo $info['title']?></span>
                    </div>
                    <div id="descDiv">
                        <span id="description"><?php echo $info['desc']?></span>
                    </div>
                </div>
                <div id="innerBottomZone">
                    <div id="bottomTopDiv">
                        <div id="slot1AdHolder">
                            <div class="slotImg">
                               <img src="<?php echo $info['slotOne']['imgSrc']?>">
                            </div>
                            <div class="slotLink">
                                <a href="<?php echo $info['slotOne']['link_Target']?>">
                                    <?php echo $info['slotOne']['link']?>
                                </a>
                            </div>
                        </div>
                        <div id="slot2AdHolder">
                            <div class="slotImg">
                               <img src="<?php echo $info['slotTwo']['imgSrc']?>">
                            </div>
                            <div class="slotLink">
                                <a href="<?php echo $info['slotTwo']['link_Target']?>">
                                    <?php echo $info['slotTwo']['link']?>
                                </a>
                            </div>
                        </div>
                        <div id="slot3AdHolder">
                            <div class="slotImg">
                               <img src="<?php echo $info['slotThree']['imgSrc']?>">
                            </div>
                            <div class="slotLink">
                                <a href="<?php echo $info['slotThree']['link_Target']?>">
                                    <?php echo $info['slotThree']['link']?>
                                </a>
                            </div>
                        </div>
                        <div id="slot4AdHolder">
                            <div class="slotImg">
                               <img src="<?php echo $info['slotFour']['imgSrc']?>">
                            </div>
                            <div class="slotLink">
                                <a href="<?php echo $info['slotFour']['link_Target']?>">
                                    <?php echo $info['slotFour']['link']?>
                                </a>
                            </div>
                        </div>
                        
                    </div>
                    <div id="bottomBottomDiv">
                        <div id="bbLeftDiv">
                            <img src="<?php echo $info['bottom_left_pic']?>">
                        </div>
                        <div id="bbRightDiv">
                            <img src="<?php echo $info['bottom_right_pic']?>">
                        </div>
                    </div>
                </div>
            </div>
                    
        </div>
        <div id='footer'>
            <div id='hours'>
                <div class='footerLabel'>
                    <span>Hours:</span>
                </div>
                <div class='hoursText'>
                    <span class='days'>Monday-Saturday</span><br/>
                    <span class='hours'>9:00 AM - 8:00 PM</span><br/>
                    <span class='days'>Sunday</span><br/>
                    <span class='hours'>Closed</span>                
                </div>
            </div>
            <div id='address'>
                <div class='footerLabel'>
                    <span>Location:</span>
                </div>
                <div class='locText'>
                    <span>Winn-Dixie Shopping Center</span><br/>
                    <span>1778 Carter Hill Road</span><br/>
                    <span>Montgomery, Al.</span><br/>
                    <span class='phone'>Phone: (334) 239-7019</span>
                </div>
            </div>
            <div id='about'>
                <div class='footerLabel'>
                    <span>About Us:</span>
                </div>
                <div class='aboutText'>
                    <a href='https://www.google.com/maps/place/Sals+Dollar/@32.35832,-86.282907,17z/data=!3m1!4b1!4m2!3m1!1s0x0:0x3fe5bc5c069d231c'>
                        <span>Directions</span><br/>
                    </a>
                    <a href="http://www.google.com">
                        <span>About Us</span>
                    </a>
                </div>
            </div>
        </div>
    </body>
</html>
