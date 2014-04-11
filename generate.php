<?php
require_once("./appInit.php");
require_once(APP_INC."gd2helper.php");
// Auth

// Verify Token

// Generate Image
$width = 1200;
$height = 800;
$img = imagecreatefromjpeg('./assets/images/2.jpg');
$font_path = './assets/fonts/FelixTitling.ttf';
$font_path_zhcn = './assets/fonts/msyh.ttf';
$font_size = 20;

$logo1 = imagecreatefrompng('./assets/images/Logo/1-10/California Institute of Technology.png');
$color = imagecolorallocate($img,75,53,53);
imagecopy($img,$logo1,60,100,0,0,100,100);
imagettftextjustified($img,$font_size,0,210,120,$color,$font_path,'California Institute of Technology',350,3,2);
imagettftext($img, 20, 0, 20, 45, $color, $font_path_zhcn, "小灰灰的Offer墙");
header('Content-Type: image/png');
imagepng($img);
imagedestroy($img);
imagedestroy($logo1);
?>