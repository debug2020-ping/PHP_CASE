<?php
$source = './images/1.jpg';                        // 原图路径
$dst_w = 200;                                      // 目标宽度
$dst_h = 100;                                      // 目标高度
list($src_w, $src_h) = getimagesize($source);      // 获取原图宽高
$src_img = imagecreatefromjpeg($source);           // 创建原图资源
$dst_img = imagecreatetruecolor($dst_w, $dst_h);   // 创建目标图像画布资源
// 将原图缩放到目标图像中
imagecopyresampled($dst_img, $src_img, 0, 0, 0, 0, $dst_w, $dst_h, $src_w, $src_h);
header('Content-Type: image/jpeg');
imagejpeg($dst_img);
