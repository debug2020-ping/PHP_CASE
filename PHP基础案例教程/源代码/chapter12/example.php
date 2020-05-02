<?php
// 创建一个100 * 100的空白画布
$img = imagecreatetruecolor(100, 100); 
// 获取白色（RGB颜色值：255,255,255）
$white = imagecolorallocate($img, 255, 255, 255); 
// 获取红色（RGB颜色值：255,0,0）
$red = imagecolorallocate($img, 255, 0, 0); 
// 为画布x=0，y=0坐标点和相邻且颜色相同的点填充白色）
imagefill($img, 0, 0, $white);
// 以x=50，y=50坐标点为圆心，绘制红色边线的圆，宽高皆为90px
imageellipse($img, 50, 50, 90, 90, $red); 
// 设置响应内容的MIME类型为PNG图像
header('Content-type: image/png'); 
// 输出图像到浏览器
imagepng($img);
