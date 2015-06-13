<?php
include 'server.php';
$svr = new server();
$file = $_FILES['img'];

$res=$svr->upload('./img/', $file);

echo '<script>alert("Picture was Successfully uploaded"); window.close();</script>';
