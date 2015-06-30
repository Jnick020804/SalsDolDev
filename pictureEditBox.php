<!DOCTYPE html>
<?php
include 'Display.php';
$disp = new Display();
$pageId = $_GET['id'];
$pageZone = $_GET['zone'];

switch($pageId)
{
    case'HH':
        $innerPage ='household';
        $page = $disp->getInnerPageInfo('household');
        break;
    case'P':
        $innerPage ='pantry';
        $page = $disp->getInnerPageInfo('pantry');
        break;
    case'PS':
        $innerPage ='party_supply';
        $page = $disp->getInnerPageInfo('party_supply');
        break;
    case'HB':
        $innerPage ='hlth_beauty';
        $page = $disp->getInnerPageInfo('hlth_beauty');
        break;
    case'OS':
        $innerPage ='offc_sch';
        $page = $disp->getInnerPageInfo('offc_sch');
        break;
    case'TC':
        $innerPage ='toy_crfts';
        $page = $disp->getInnerPageInfo('toy_crfts');
        break;
    case'SH':
        $innerPage ='ssnl_hldy';
        $page = $disp->getInnerPageInfo('ssnl_hldy');
        break;
    case'A':
        $innerPage ='apprl';
        $page = $disp->getInnerPageInfo('apprl');
        break;
}
if($pageZone == 'MAIN_PIC')
{
    $area ='MAIN_PIC';
    $index='mainPic';
}
else if($pageZone == 'BTM_LFT')
{
    $area = 'BTM_LFT';
    $index='bottom_left_pic';
}
else
{
    $area='BTM_RGHT';
    $index='bottom_right_pic';
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel='stylesheet' href='css/editZone.css' type='text/css'/>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
        <script src="scripts/dashboard.js"></script>
        <script src="scripts/featherlight.min.js"></script>
        <link rel="stylesheet" href='scripts/featherlight.min.css' type='text/css'/>
    </head>
    <body style="height:400px">
        <div id="contentBox">
            <form id="textForm" method="post" action="changeInnerPic.php">
                <input name="page" type="hidden" value="<?php echo $innerPage; ?>">
                <input name="index" type="hidden" value="<?php echo $index;?>">
                <div id="contentPortion">
                    <div id="leftHalf">
                        <div id="titleLabel">
                            <span><?php echo $area.':'?></span>
                        </div>
                    </div>
                    <div id="rightHalf">
                        <div id="imageContainer">
                            <img id="advertImage" src="<?php echo $page[$index]?>"/>
                            <input type="hidden" name="imgSrc" id="imgSrc" value="<?php echo $page[$index] ?>">
                        </div>
                        <div id="browseButtonBox">
                            <a href="#" data-featherlight="pictureGallery.php">
                                <div id="browseButton">
                                    <span>Browse</span>
                                </div>
                            </a>
                         </div>
                    </div>
                </div>
                <div id="confirmPortion">
                    <div id="buttonHolder">
                        <div id="confirmButtonDiv">
                            <input type="submit" name="submit" id="submit" value="Confirm">
                        </div>
                        <div id="cancelButton" onclick="window.close();">
                            <span>Cancel</span>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>
