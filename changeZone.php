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
$result = $db->queryDb($sql,$zoneID,':zoneID');
$row=$result->fetch();

$sql = "UPDATE Sals_Dollar.ZONES SET ZONES.imgSrc='".$imgSrc."', ZONES.linkTarget='".$target."',".
"ZONES.linkMessage='".$link."', ZONES.title='".$title."', ZONES.description='".$desc."' WHERE ZONES.ID =".$row['ID'].";";
$res = $db->execDb($sql);
echo'<script>alert("ZONE HAS SUCCESSFULLY UPDATED"); window.close();</script>';