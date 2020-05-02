<?php
// 设置画布的宽和高
$width = 300;
$height = 200;
$img = imagecreate($width, $height);
imagecolorallocate($img, 255, 255, 255);
// 生成雪花 
for ($i = 1; $i <= 400; ++$i) {
    $size = mt_rand(1, 5);
    $x = mt_rand(0, $width);
    $y = mt_rand(0, $height);
    $color = imagecolorallocate($img, mt_rand(0, 255), mt_rand(0, 255), mt_rand(0, 255));
    $char = '*'; 
    imagechar($img, $size, $x, $y, $char, $color);
}
header('Content-Type: image/gif');
imagegif($img);
imagedestroy($img);
