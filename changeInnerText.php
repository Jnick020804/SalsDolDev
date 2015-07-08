<?php
include 'Database.php';
$db = new Database('Sals_Dollar','localhost','root','root','mysql');

$page = $_POST['page'];
$index = $_POST['index'];
$ctnt = $_POST['textContent'];

$sql='select * from Inner_Page where Inner_Page.page_ID = :page';
$result = $db->queryDb($sql,$page,':page');
$row=$result->fetch();
$sql='UPDATE Sals_Dollar.Inner_Page ';
switch($index)
{
    case'title':
        $sql.= 'SET title ="'.$ctnt.'" WHERE ID ='.$row['ID'];
        break;
    case'desc':
        $sql.= 'SET description ="'.$ctnt.'" WHERE ID ='.$row['ID'];
        break;
}

$res = $db->execDb($sql);
echo'<script>alert("ZONE HAS SUCCESSFULLY UPDATED"); window.close();</script>';