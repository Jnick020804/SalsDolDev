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
$info = $disp->getAdZoneInfo($zoneID);
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Edit Zone</title>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
        <script src="scripts/featherlight.min.js"></script>
        <link rel="stylesheet" href='scripts/featherlight.min.css' type='text/css'/>
         <link rel='stylesheet' href='css/editZone.css' type='text/css'/>
    </head>
    <body style="height:400px">
        <div id="contentBox">
            <form method="post" action="changeZone.php"> 
                <input type="hidden" name="zoneID" value="<?php echo $zoneID;?>"
                <div id="contentPortion">
                    <div id="leftHalf">
                        <div id="imageContainer">
                            <img id="advertImage" src="<?php echo $info['imgSrc'] ?>" alt="advert"/>
                            <input type="hidden" name="imgSrc" id="imgSrc" value="<?php echo $info['imgSrc'] ?>">
                        </div>
                        <div id="browseButtonBox">
                            <a href="#" data-featherlight="pictureGallery.php">
                                <div id="browseButton">
                                    <span>Browse</span>
                                </div>
                            </a>
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
        <script>
            function setNewPicture(id)
            {
                src = document.getElementById(id).getAttribute('src');
                
                document.getElementById('advertImage').setAttribute('src',src);
                document.getElementById('imgSrc').setAttribute('value',src);

                
                alert('IMAGE CHANGED' + document.getElementById('imgSrc').getAttribute('value'));
            }
        </script>
    </body>
</html>
