<!DOCTYPE html>
<?php
include 'Display.php';
$disp = new Display();
$pageId = $_GET['id'];
$pageZone = $_GET['zone'];

switch($pageId)
{
    case'HH':
        $page = $disp->getInnerPageInfo('household');
        break;
    case'P':
        $page = $disp->getInnerPageInfo('pantry');
        break;
    case'PS':
        $page = $disp->getInnerPageInfo('party_supply');
        break;
    case'HB':
        $page = $disp->getInnerPageInfo('hlth_beauty');
        break;
    case'OS':
        $page = $disp->getInnerPageInfo('offc_sch');
        break;
    case'TC':
        $page = $disp->getInnerPageInfo('toy_crfts');
        break;
    case'SH':
        $page = $disp->getInnerPageInfo('ssnl_hldy');
        break;
    case'A':
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
    </head>
    <body>
        <div id="formHolder">
            <form id="textForm" method="post" action="changeTextField.php">
                <div id="labelDiv">
                    <span><?php echo $area?></span>
                </div>
                <div id="fieldHolder">
                   <img src="<?php echo $page[$index]?>"/>
                </div>
            </form>
        </div>
    </body>
</html>
