<?php
include 'server.php';
$svr = new server();
$file = $_FILES['img'];

$res=$svr->upload('./img/', $file);
if($res == 0)
{
    $_SESSION['chosenPic'] = './img/'.$file['name'];
}
else
{
        $_SESSION['chosenPic'] = null;           
}


echo'<script>window.close();</script>';
