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
                <?php echo $disp->displayNav(array('Household','Pantry','Party Supplies','Health & Beauty','Office & School','Toys & Crats','Seasonal & Holidays','Apparel'));?>
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
                        </div>
                    </div>
                </div>
                <div class='middleTop'>
                        
                        <div id='sliderDiv'>
                            
                        </div>
                        <div id='midTopMsg' class='right'>
                            
                        </div>
                        <div id='midBtmMsg' class='right'>
                            
                        </div>
                </div>
                <div class='middleBtm'>
                        <div class='leftThird'>
                            <div class='InnerTop'>
                                
                            </div>
                            <div class='InnerBottom'>
                                
                            </div>
                        </div>
                        <div class='midThird'>
                            
                        </div>
                        <div class='rightThird'>
                            
                        </div>
                </div>
                <div id="sliderBtm">
                        
                </div>
                <div class='bottom'>
                    <div class="leftThird">
                        
                    </div>
                    <div class="midThird">
                        
                    </div>
                    <div class="leftThird">
                        
                    </div>
                </div>
            </div>
        </div>
        <div id='footer'>
                        
        </div>
        
    </body>
</html>
