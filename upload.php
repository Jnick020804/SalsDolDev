<?php
include 'server.php';
$svr = new server();
$file = $_FILES['img'];

$res=$svr->upload('./img/', $file);
echo$res;
if($res == 1)
{
    $_SESSION['chosenPic'] = './img/'.$file['name'];
    echo'<h1>got here</h1>';
}
else
{
        $_SESSION['chosenPic'] = null;

            
}

