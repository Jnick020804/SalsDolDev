<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php $zoneID = $_GET['id'] ?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Edit Zone</title>
    </head>
    <body>
        <div id="contentBox">
            <form method="post" action="changeZone.php"> 
                <div id="contentPortion">
                    <div id="leftHalf">
                        <div id="imageContainer">
                            <image id="advertImage" src="" alt="advert"/>
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
                                <input type="text" name="title" id="title" value="">
                            </div>
                        </div>
                        <div id="descBox">
                            <div id="descLabel">
                                <span>Description:</span>
                            </div>
                            <div id="descField">
                                <input type="text" name="desc" id="desc" value="">
                            </div>
                        </div>
                        <div id="linkTextBox">
                            <div id="linkTextLabel">
                                <span>Link:</span>
                            </div>
                            <div id="linkTextField">
                                <input type="text" name="link" id="link" value="">
                            </div>    
                        </div>
                        <div id="linkTargetBox">
                            <div id="linkTargetLabel">
                                <span>Link Target:</span>
                            </div>
                            <div id="linkTargetField">
                                <input type="text" name="target" id="target" value="">
                            </div>
                        </div>
                    </div>
                </div>
                <div id="confirmPortion">
                    <div id="buttonHolder">
                        <div id="confirmButtonDiv">
                            <input type="submit" name="submit" id="submit" value="Confirm">
                        </div>
                        <div id="cancelButtonDiv">
                            <div id="cancelButton">
                                <span>Cancel</span>
                            </div>
                        </div>
                    </div>
                </div>
            </form>     
        </div>
    </body>
</html>
