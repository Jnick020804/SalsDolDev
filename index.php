<?php
include 'Display.php';
$disp = new Display();
        ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta charset="UTF-8"> 
        <title>Sal's Dollar Store Montgomery Alabama</title>
        <link rel='stylesheet' href='css/main.css' type='text/css'/>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
        <link rel="stylesheet" href='scripts/lean-slider.css' type='text/css'/>
        <script src='scripts/lean-slider.js'></script>
        <script>
            $(document).ready(function() {
    $('#slider').leanSlider();
});
$(document).ready(function() {
    $('#slider2').leanSlider();
});
        </script>
        
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
                
                <div class='top'>
                    
                    <div id='upperMessage'>
                        
                        <div id='topLeftMsg' class='left'>
                            <?php echo $disp->fillContentMessageZones('topLeftMsg'); ?>
                        </div>
                        <div id='topRightMsg' class='right'>
                            <?php echo $disp->fillContentMessageZones('topRightMsg'); ?>
                        </div>
                    </div>
                </div>
                <div class='middleTop'>
                        
                        <div id='sliderDiv'>
                            <iframe src="https://player.vimeo.com/video/46781473?autoplay=1&title=0&byline=0&portrait=0" width="470" height="320" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen>                              
                            </iframe>
                        </div>
                        <div id='midTopMsg' class='right'>
                            <?php echo $disp->fillContentAdZones('midTopMsg'); ?>
                            
                        </div>
                        <div id='midBtmMsg' class='right'>
                             <?php echo $disp->fillContentAdZones('midBtmMsg'); ?>
                        </div>
                </div>
                <div class='middleBtm'>
                        <div class='midleftThird'>
                            <div class='InnerTop'>
                                 <?php $options['style']=2; echo $disp->fillContentAdZones('innerTopMsg',$options); ?>
                            </div>
                            <div class='InnerBottom'>
                                 <?php $options['style']=2; echo $disp->fillContentAdZones('innerBtmMsg',$options); ?>
                            </div>
                        </div>
                        <div class='midThird'>
                            <div id='slider'>
                                <div id='slide1'>
                                   <?php $options['style']=1; echo $disp->fillContentAdZones('slide1',$options); ?> 
                                </div>
                                <div id='slide2'>
                                    <?php $options['style']=1; echo $disp->fillContentAdZones('slide2',$options); ?>
                                </div>
                                <div id='slide3'>
                                    <?php $options['style']=1; echo $disp->fillContentAdZones('slide3',$options); ?>
                                </div>
                            </div>
                            
                        </div>
                        <div class='rightThird'>
                             <?php $options['style']=1; echo $disp->fillContentAdZones('rightThirdMsg',$options); ?>
                        </div>
                </div>
                <div id="sliderBtm">
                    <div id="slider2">
                        <div id="btmSlide1">
                            <div id="inslide1">
                                <?php echo $disp->fillBtmSliderZones('inslide1'); ?>
                            </div>
                            <div id="inslide2">
                                <?php echo $disp->fillBtmSliderZones('inslide2'); ?>
                            </div>
                            <div id="inslide3">
                                <?php echo $disp->fillBtmSliderZones('inslide3'); ?>
                            </div>
                            <div id="inslide4">
                                <?php echo $disp->fillBtmSliderZones('inslide4'); ?>
                            </div>
                            <div id="inslide5">
                                <?php echo $disp->fillBtmSliderZones('inslide5'); ?>
                            </div>
                        </div>
                        <div id="btmSlide2">
                            <div id="inslide6">
                                <?php echo $disp->fillBtmSliderZones('inslide6'); ?>
                            </div>
                            <div id="inslide7">
                                <?php echo $disp->fillBtmSliderZones('inslide7'); ?>
                            </div>
                            <div id="inslide8">
                                <?php echo $disp->fillBtmSliderZones('inslide8'); ?>
                            </div>
                            <div id="inslide9">
                                <?php echo $disp->fillBtmSliderZones('inslide9'); ?>
                            </div>
                            <div id="inslide10">
                                <?php echo $disp->fillBtmSliderZones('inslide10'); ?>
                            </div>
                        </div>
                    </div>    
                </div>
                <div class='bottom'>
                    <div class="leftThird">
                        <img/>
                        <?php $option['style']=1; echo $disp->fillContentAdZones('btmLeftThirdMsg',$option); ?>
                    </div>
                    <div class="midThird">
                        <img/>
                        <?php $option['style']=1; echo $disp->fillContentAdZones('btmMidThirdMsg',$option); ?>
                    </div>
                    <div class="rightThird">
                        <img/>
                        <?php $option['style']=1; echo $disp->fillContentAdZones('btmRightThirdMsg',$option); ?>
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
