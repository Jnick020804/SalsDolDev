<?php
include 'Display.php';
$disp = new Display();
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php $zoneID = $_GET['id'];
$info = $disp->getAdZoneInfo($zoneID);?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Edit Zone</title>
         <link rel='stylesheet' href='css/editZone.css' type='text/css'/>
    </head>
    <body style="height:400px">
        <div id="contentBox">
            <form method="post" action="changeZone.php"> 
                <div id="contentPortion">
                    <div id="leftHalf">
                        <div id="imageContainer">
                            <img id="advertImage" src="<?php echo $info['imgSrc'] ?>" alt="advert"/>
                            <input type="hidden" name="imgSrc" id="imgSrc" value="<?php echo $info['imgSrc'] ?>">
                        </div>
                        <div id="browseButtonBox">
                            <div id="browseButton">
                                <span>Browse</span>
                            </div>
                        </div>
                    </div>
                    <div id="rightHalf">
                        <div id="titleBox">
                            <div id="titleLabel">
                                <span>Title:</span>
                            </div>
                            <div id="titleField">
                                <textarea name="title" id="title" rows="10" cols="30"><?php echo $info['title'] ?></textarea>
                            </div>
                        </div>
                        <div id="descBox">
                            <div id="descLabel">
                                <span>Description:</span>
                            </div>
                            <div id="descField">
                                <textarea name="desc" id="desc" rows="10" cols="30"><?php echo $info['description'] ?></textarea>
                            </div>
                        </div>
                        <div id="linkTextBox">
                            <div id="linkTextLabel">
                                <span>Link:</span>
                            </div>
                            <div id="linkTextField">
                                <textarea name="link" id="link" rows="10" cols="30"><?php echo $info['linkMessage'] ?></textarea>
                            </div>    
                        </div>
                        <div id="linkTargetBox">
                            <div id="linkTargetLabel">
                                <span>Link Target:</span>
                            </div>
                            <div id="linkTargetField">
                                <textarea name="target" id="target" rows="10" cols="30"><?php echo $info['linkTarget'] ?></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="confirmPortion">
                    <div id="buttonHolder">
                        <div id="confirmButtonDiv">
                            <input type="submit" name="submit" id="submit" value="Confirm">
                        </div>
                        <div id="cancelButton">
                            <span>Cancel</span>
                        </div>
                    </div>
                </div>
            </form>     
        </div>
    </body>
</html>
