<?php
include 'Database.php';
$db = new Database('Sals_Dollar','localhost','root','root','mysql');

$zoneID = $_POST['zoneID'];
$imgSrc = $_POST['imgSrc'];
$title = $_POST['title'];
$desc = $_POST['desc'];
$link = $_POST['link'];
$target = $_POST['target'];


$sql='SELECT * FROM ZONES WHERE ZONES.Zone_ID =:zoneID';
if(strpos($zoneID,'_AD'))
{
    $sql='SELECT * FROM Inner_Page_Ad WHERE Inner_Page_Ad.ad_Name =:zoneID';
}
$result = $db->queryDb($sql,$zoneID,':zoneID');
$row=$result->fetch();

$sql = "UPDATE Sals_Dollar.ZONES SET ZONES.imgSrc='".$imgSrc."', ZONES.linkTarget='".$target."',".
"ZONES.linkMessage='".$link."', ZONES.title='".$title."', ZONES.description='".$desc."' WHERE ZONES.ID =".$row['ID'].";";
if(strpos($zoneID,'_AD'))
{
    $sql='UPDATE Sals_Dollar.Inner_Page_Ad SET title ="'.$title.'", link="'.$link.'", '.
    'imgSrc="'.$imgSrc.'", link_Target="'.$target.'", description="'.$desc.'" WHERE ID ='.$row['ID'].';';
}

$res = $db->execDb($sql);
echo'<script>alert("ZONE HAS SUCCESSFULLY UPDATED"); window.close();</script>';