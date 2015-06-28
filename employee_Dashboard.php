<?php
session_start();
include 'Display.php';
$disp = new Display();
$hh = $disp->getInnerPageInfo('household');
$ptry = $disp->getInnerPageInfo('pantry');
$prtySup = $disp->getInnerPageInfo('party_supply');
$hlBty = $disp->getInnerPageInfo('hlth_beauty');
$offSch = $disp->getInnerPageInfo('offc_sch');
$tyCrfts = $disp->getInnerPageInfo('toy_crfts');
$ssnHldy = $disp->getInnerPageInfo('ssnl_hldy');
$apprl = $disp->getInnerPageInfo('apprl');
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
        <link rel='stylesheet' href='css/main.css' type='text/css'/>
        <link rel='stylesheet' href='css/adZoneKey.css' tyep='text/css'>    
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
                                                            'Edit Pages',
                                                            'http://www.google.com',
                                                            1,
                                                            'editInPage()'
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
                <div id='welcomeText'>
                    <p class='welcome'>
                        Welcome to the Sal's Dollar Dashboard. Here you can Edit the Ad zones 
                        over the entire site. When you click on the "Edit Ad Zones" Button
                        a menu will appear. Select the Ad Zone that you would like to edit and then
                        select the content that you would like to display in it. Make sure you pay
                        attention to any constraints such as max picture size and text length.
                        <br/>
                        <br/>
                        To Edit a picture click on the ad zone you would like to edit then click
                        the browse button under the picture. When you do a window will pop up that
                        contains all the images on the server. Just click the image you would like to
                        add. When you see a message pop up saying the image was changed click ok then exit
                        out of the picture window.
                        <br/>
                        <br/>
                        To Upload an image to the server click on any add zone and click browse under the
                        picture. A window will pop up with all of the images on the sever. Under those images
                        Click the browse button again. Select the image you want to upload then press ok.
                        Click the upload button. A message will appear saying the upload completed and the window
                        will automatically close. The image is now on the server and will be available for use
                        <br/>
                        <br/>
                        To edit any non-image field in an add zone just type the text in the appropriate text box
                        and click submit.<strong>NOTE: the LINK TARGET is where you want the link to go. the LINK is what 
                        you want the link to say</strong>
                        
                        
                       
                    </p>
                </div>
                <div id="zoneKey">
                    <div id="upper">
                        <div id="leftAd">
                            <div class="adText1">
                                <span>Top Left Zone</span>
                            </div>
                        </div>
                        <div id="rightAdvert">
                            <div class="adText1">
                                <span>Top Right Zone</span>
                            </div>
                        </div>
                    </div>
                    <div id='center'>
                        <div id='midSlider'>
                            <div class="adText1">
                                <span>Upper Slider</span>
                            </div>
                        </div>
                        <div id='midAdZone'>
                            <div id='midUpAd'>
                                <div class="adText1">
                                <span>Mid Top Zone</span>
                            </div>
                            </div>
                            <div id='midDwnAd'>
                                <div class="adText1">
                                <span>Mid Bottom Zone</span>
                            </div>
                            </div>
                        </div>
                    </div>
                    <div id='lowerCenter'>
                        <div class='leftLCthird'>
                            <div id='upInnerAd'>
                                <div class="adText1">
                                <span>Inner Top Zone</span>
                            </div>
                            </div>
                            <div id='downInnerAd'>
                                <div class="adText1">
                                <span>Inner Bottom Zone</span>
                            </div>
                            </div>
                        </div>
                        <div class='midLCthird'>
                            <div class="adText1">
                                <span>Slides 1-3</span>
                            </div>
                        </div>
                        <div class='rightLCthird'>
                            <div class="adText1">
                                <span>Right Third Zone</span>
                            </div>
                        </div>
                    </div>
                    <div id='upperBottom'>
                        <div class="adText1">
                                <span>Bottom Slides 1-10</span>
                            </div>
                    </div>
                    <div id='bottom'>
                        <div id='bottomLeftThird'>
                            <div class="adText1">
                                <span>Bottom Left Zone</span>
                            </div>
                        </div>
                        <div id='bottomMidThird'>
                            <div class="adText1">
                                <span>Bottom Mid Zone</span>
                            </div>
                        </div>
                        <div id='bottomRightThird'>
                            <div class="adText1">
                                <span>Bottom Right Zone</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="innerPageKey">
                    <div id="innerTopZone">
                    <div id="mainPicDiv">
                        <span class="adText1">Main Picture Zone (mainPic)</span>
                    </div>
                    <div id="sideTopDiv">
                        <div id="topSide">
                            <span class="adText1">Top Side Top Zone (_TST_AD)</span>
                        </div>
                        <div id="btmSide">
                             <span class="adText1">Top Side Bottom Zone (_TSB_AD)</span>
                        </div>
                    </div>
                    
                    </div>
                    <div id="innerMidZone">
                        <div id="descTitleDiv">
                            <span class="adText1">Bottom Right Zone (title)</span>
                        </div>
                        <div id="descDiv">
                            <span class="adText1">Description Zone (Desc)</span>
                        </div>
                    </div>
                    <div id="innerBottomZone">
                        <div id="bottomTopDiv">
                            <div id="slot1AdHolder">
                                <span class="adText1">Slot 1 Zone (_S1_AD)</span>
                            </div>
                            <div id="slot2AdHolder">
                                <span class="adText1">Slot 2 Zone (_S2_AD)</span>
                            </div>
                            <div id="slot3AdHolder">
                                <span class="adText1">Slot 3 Zone (_S3_AD)</span>
                            </div>
                            <div id="slot4AdHolder">
                              <span class="adText1">Slot 4 Zone (_S4_AD)</span>
                            </div>
                        </div>
                        <div id="bottomBottomDiv">
                            <div id="bbLeftDiv">
                               <span class="adText1">Bottom Left Zone (_btm_lft_AD)</span>

                            </div>
                            <div id="bbRightDiv">
                                <span class="adText1">Bottom Right Zone (_btm_rght_AD)</span>
                            </div>
                        </div>  
                    </div>
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
        <div id="inpageAdNav">
            <?php echo $disp->displayMenu(array(
                    array('Household','showSubList(this.id)','houseHoldDiv',
                        array($hh['side_top_ad'],
                              $hh['side_btm_ad'],
                              $hh['slotOne'],
                              $hh['slotTwo'],
                              $hh['slotThree'],
                              $hh['slotFour'],
                              array('MainImg'=>$hh['mainPic'],'zone'=>'HH'),
                              array('BottomLeft'=>$hh['bottom_left_pic'],'zone'=>'HH'),
                              array('BottomRight'=>$hh['bottom_right_pic'],'zone'=>'HH'),
                              array('Title'=>$hh['title'],'zone'=>'HH'),
                              array('Descr'=>$hh['desc'],'zone'=>'HH'))),
                
                        array('Pantry','showSubList(this.id)','pantryDiv',
                            array($ptry['side_top_ad'],
                                  $ptry['side_btm_ad'],
                                  $ptry['slotOne'],
                                  $ptry['slotTwo'],
                                  $ptry['slotThree'],
                                  $ptry['slotFour'],
                                  array('mainImg'=>$ptry['mainPic'],'zone'=>'P'),
                                  array('BottomLeft'=>$ptry['bottom_left_pic'],'zone'=>'P'),
                                  array('BottomRight'=>$ptry['bottom_right_pic'],'zone'=>'P'),
                                  array('Title'=>$ptry['title'],'zone'=>'P'),
                                  array('Descr'=>$ptry['desc'],'zone'=>'P'))),
       
                
                        array('Party Supplies','showSubList(this.id)','partyDiv',
                            array($prtySup['side_top_ad'],
                                  $prtySup['side_btm_ad'],
                                  $prtySup['slotOne'],
                                  $prtySup['slotTwo'],
                                  $prtySup['slotThree'],
                                  $prtySup['slotFour'],
                                  array('mainImg'=>$prtySup['mainPic'],'zone'=>'PS'),
                                  array('BottomLeft'=>$prtySup['bottom_left_pic'],'zone'=>'PS'),
                                  array('BottomRight'=>$prtySup['bottom_right_pic'],'zone'=>'PS'),
                                  array('Title'=>$prtySup['title'],'zone'=>'PS'),
                                  array('Descr'=>$prtySup['desc'],'zone'=>'PS'))),
                   
                        array('Health & Beauty','showSubList(this.id)','healthDiv',
                            array($hlBty['side_top_ad'],
                                  $hlBty['side_btm_ad'],
                                  $hlBty['slotOne'],
                                  $hlBty['slotTwo'],
                                  $hlBty['slotThree'],
                                  $hlBty['slotFour'],
                                  array('mainImg'=>$hlBty['mainPic'],'zone'=>'HB'),
                                  array('BottomLeft'=>$hlBty['bottom_left_pic'],'zone'=>'HB'),
                                  array('BottomRight'=>$hlBty['bottom_right_pic'],'zone'=>'HB'),
                                  array('Title'=>$hlBty['title'],'zone'=>'HB'),
                                  array('Descr'=>$hlBty['desc'],'zone'=>'HB'))),
                   
                        array('Office & School','showSubList(this.id)','schDiv',
                            array($offSch['side_top_ad'],
                                  $offSch['side_btm_ad'],
                                  $offSch['slotOne'],
                                  $offSch['slotTwo'],
                                  $offSch['slotThree'],
                                  $offSch['slotFour'],
                                  array('mainImg'=>$offSch['mainPic'],'zone'=>'OS'),
                                  array('BottomLeft'=>$offSch['bottom_left_pic'],'zone'=>'OS'),
                                  array('BottomRight'=>$offSch['bottom_right_pic'],'zone'=>'OS'),
                                  array('Title'=>$offSch['title'],'zone'=>'OS'),
                                  array('Descr'=>$offSch['desc'],'zone'=>'OS'))),
                    
                        array('Toys & Crafts','showSubList(this.id)','toyDiv',
                            array($tyCrfts['side_top_ad'],
                                  $tyCrfts['side_btm_ad'],
                                  $tyCrfts['slotOne'],
                                  $tyCrfts['slotTwo'],
                                  $tyCrfts['slotThree'],
                                  $tyCrfts['slotFour'],
                                  array('mainImg'=>$tyCrfts['mainPic'],'zone'=>'TC'),
                                  array('BottomLeft'=>$tyCrfts['bottom_left_pic'],'zone'=>'TC'),
                                  array('BottomRight'=>$tyCrfts['bottom_right_pic'],'zone'=>'TC'),
                                  array('Title'=>$tyCrfts['title'],'zone'=>'TC'),
                                  array('Descr'=>$tyCrfts['desc'],'zone'=>'TC'))),
                    
                        array('Seasonal & Holiday','showSubList(this.id)','seasDiv',
                            array($ssnHldy['side_top_ad'],
                                  $ssnHldy['side_btm_ad'],
                                  $ssnHldy['slotOne'],
                                  $ssnHldy['slotTwo'],
                                  $ssnHldy['slotThree'],
                                  $ssnHldy['slotFour'],
                                  array('mainImg'=>$ssnHldy['mainPic'],'zone'=>'SH'),
                                  array('BottomLeft'=>$ssnHldy['bottom_left_pic'],'zone'=>'SH'),
                                  array('BottomRight'=>$ssnHldy['bottom_right_pic'],'zone'=>'SH'),
                                  array('Title'=>$ssnHldy['title'],'zone'=>'SH'),
                                  array('Descr'=>$ssnHldy['desc'],'zone'=>'SH'))),
                    
                        array('Apparel','showSubList(this.id)','apprlDiv',
                            array($apprl['side_top_ad'],
                                  $apprl['side_btm_ad'],
                                  $apprl['slotOne'],
                                  $apprl['slotTwo'],
                                  $apprl['slotThree'],
                                  $apprl['slotFour'],
                                  array('mainImg'=>$apprl['mainPic'],'zone'=>'A'),
                                  array('BottomLeft'=>$apprl['bottom_left_pic'],'zone'=>'A'),
                                  array('BottomRight'=>$apprl['bottom_right_pic'],'zone'=>'A'),
                                  array('Title'=>$apprl['title'],'zone'=>'A'),
                                  array('Descr'=>$apprl['desc'],'zone'=>'A')))               
            ));?>
        </div>
     <script src="scripts/dashboard.js"></script> 
    </body>
    
</html>
