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
            Top AD ZONE
        </div>
        <div id='headerZone'>
            <div id='bannerZone'>
                BANNER ZONE
            </div>
            <div id='navZone'>
                <?php echo $disp->displayNav(array('Household','Pantry','Party Supplies','Health & Beauty','Office & School','Toys & Crats','Seasonal & Holidays','Apparel'));?>
            </div>
            
        </div>
        <div id='bodyWrapper'>
            Body Wrapper
            <div id='bodyZone'>
                Body Zone
                <div class='top'>
                    TOP OF BODY
                    <div id='upperMessage'>
                        <div id='topLeftMsg' class='left'>

                        </div>
                        <div id='topRightMsg' class='right'>

                        </div>
                    </div>
                    <div class='middleTop'>
                        <div id='sliderDiv'>
                            
                        </div>
                        <div id='midTopMsg' class='right top'>
                            
                        </div>
                        <div id='midBtmMsg' class='right bottom'>
                            
                        </div>
                    </div>
                    <div class='middleBtm'>
                        <div class='leftThird'>
                            <div class='top'>
                                
                            </div>
                            <div class='bottom'>
                                
                            </div>
                        </div>
                        <div class='midThird'>
                            
                        </div>
                        <div class='rightThird'>
                            
                        </div>
                    </div>
                    <div class='bottom'>
                        
                    </div>
                </div>
            </div>
        </div>
        <div id='footer'>
                        
        </div>
        
    </body>
</html>
