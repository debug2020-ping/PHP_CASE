<?php
$img = imagecreatefromjpeg('./images/tree.jpg');        // 创建画布
$color = imagecolorallocate($img, 223, 230, 221);       // 获取颜色
imagefill($img, 0, 0, $color);                          // 为画布背景填充颜色
imagejpeg($img, './images/tree_new.jpg', 80);           // 保存图像
imagedestroy($img);                                     // 销毁图像

/*
// 保留透明通道
$img = imagecreatefrompng('./images/ball.png');  // 创建PNG格式的画布资源
header('Content-Type: image/png');               // 设置图像资源输出格式
imagesavealpha($img, true);                      // 设置透明通道是否保留，默认为false
imagepng($img);
*/