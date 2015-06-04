<?php
include 'Display.php';
$disp = new Display();
        ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta charset="UTF-8">
        <title>Sal's Dollar Store Montgomery Alabama</title>
        <link rel='stylesheet' href='main.css' type='text/css'/>
    </head>
    <body>
        <div id='topAdZone'>
            <div class="imgWrapper">
                <img alt="topAd" src=/>
            </div>
        </div>
        <div id='headerZone'>
            <div id='bannerZone'>
                <div class="imgWrapper">
                    <img alt="banner" src="img/Sals_Dollar_Banner.jpg"/>
                </div>
            </div>
            <div id='navZone'>
                <?php echo $disp->displayNav(array(
                                                    array
                                                        (
                                                            'Household',
                                                            'http://www.google.com'
                                                        ),
                                                    array
                                                        (
                                                            'Pantry',
                                                            'http://www.google.com'
                                                        ),
                                                    array
                                                        (
                                                        
                                                            'Party Supplies',
                                                            'http://www.google.com'
                                                        ),
                                                    array
                                                        (
                                                        
                                                            'Health & Beauty',
                                                            'http://www.google.com'
                                                        ),
                                                    array
                                                        (
                                                        
                                                            'Office & School',
                                                            'http://www.google.com'
                                                        ),
                                                    array
                                                        (
                                                        
                                                            'Toys & Crafts',
                                                            'http://www.google.com'
                                                        ),
                                                    array
                                                        (
                                                        
                                                            'Seasonal & Holidays',
                                                            'http://www.google.com'
                                                        ),
                                                    array
                                                        (
                                                        
                                                            'Apparel',
                                                            'http://www.google.com'
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
                            
                        </div>
                        <div class='rightThird'>
                             <?php $options['style']=1; echo $disp->fillContentAdZones('rightThirdMsg',$options); ?>
                        </div>
                </div>
                <div id="sliderBtm">
                        
                </div>
                <div class='bottom'>
                    <div class="leftThird">
                        <?php $option['style']=1; echo $disp->fillContentAdZones('btmLeftThirdMsg',$option); ?>
                    </div>
                    <div class="midThird">
                        <?php $option['style']=1; echo $disp->fillContentAdZones('btmMidThirdMsg',$option); ?>
                    </div>
                    <div class="rightThird">
                        <?php $option['style']=1; echo $disp->fillContentAdZones('btmRightThirdMsg',$option); ?>
                    </div>
                </div>
            </div>
        </div>
        <div id='footer'>
                        
        </div>
        
    </body>
</html>
