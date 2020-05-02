<?php
// 定义基本变量
$source = './images/logo.jpg';   // 原图路径
$target = './images/1.jpg';      // 目标图路径
// 获取原图的宽高
list($src_w, $src_h) = getimagesize($source);
// 创建图像资源
$src_img = imagecreatefromjpeg($source);
$dst_img = imagecreatefromjpeg($target);
// 将原图叠加到目标图中
imagecopyresampled($dst_img, $src_img, 0, 0, 0, 0, $src_w, $src_h, $src_w, $src_h);
header('Content-Type: image/jpeg');
imagejpeg($dst_img);
