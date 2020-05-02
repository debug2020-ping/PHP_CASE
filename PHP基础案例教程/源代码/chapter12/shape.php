<?php
$size = 300;                                        // 设置画布大小
$radius = 150;                                      // 设置圆的直径（宽和高）
$img = imagecreatetruecolor($size, $size);          // 创建一个画布
$white = imagecolorallocate($img, 255, 255, 255);   // 获取画布背景色
$red = imagecolorallocate($img, 255, 0, 0);         // 获取圆的颜色
$green = imagecolorallocate($img, 0, 255, 0);       // 获取圆的颜色
$blue = imagecolorallocate($img, 0, 0, 255);        // 获取圆的颜色
imagefill($img, 0, 0, $white);                      // 为画布设置背景色
imageellipse($img, 150, 180, $radius, $radius, $red);     // 绘制红色圆
imageellipse($img, 90, 120, $radius, $radius, $green);    // 绘制绿色圆
imageellipse($img, 210, 120, $radius, $radius, $blue);    // 绘制蓝色圆
header('Content-Type: image/png');
imagepng($img);
imagedestroy($img);
