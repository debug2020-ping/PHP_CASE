<?php
$img = imagecreatefromjpeg('./images/4.jpg');       // 创建画布
imagefilter($img, IMG_FILTER_PIXELATE, 30, 30);     // 视频滤镜效果
header('Content-Type: image/jpeg');
imagejpeg($img);                                    // 特效输出
imagedestroy($img);
