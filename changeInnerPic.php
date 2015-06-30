<?php
include 'Database.php';
$db = new Database('Sals_Dollar','localhost','root','root','mysql');

$page = $_POST['page'];
$index = $_POST['index'];
$img = $_POST['imgSrc'];

$sql='select * from Inner_Page where Inner_Page.page_ID = :page';
$result = $db->queryDb($sql,$page,':page');
$row=$result->fetch();
$sql='UPDATE Sals_Dollar.Inner_Page ';
switch($index)
{
    case'mainPic':
        $sql.= 'SET mainPic ="'.$img.'" WHERE ID ='.$row['ID'];
        break;
    case'bottom_left_pic':
        $sql.= 'SET Bottom_Left_Ad_Name ="'.$img.'" WHERE ID ='.$row['ID'];
        break;
    case'bottom_right_pic':
        $sql.= 'SET Bottom_Right_Ad_Name ="'.$img.'" WHERE ID ='.$row['ID'];
        break;
}

$res = $db->execDb($sql);
echo'<script>alert("ZONE HAS SUCCESSFULLY UPDATED"); window.close();</script>';
