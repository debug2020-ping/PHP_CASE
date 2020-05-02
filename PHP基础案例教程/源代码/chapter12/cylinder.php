<?php
$img = imagecreatetruecolor(300, 300);                  // 创建画布
$white = imagecolorallocate($img, 255, 255, 255);       // 获取白色
$gray = imagecolorallocate($img, 192, 192, 192);        // 获取淡灰色
$darkgray = imagecolorallocate($img, 144, 144, 144);    // 获取深灰色
imagefill($img, 0, 0, $white);                          // 填充颜色
for ($i = 200; $i > 100; --$i) {                        // 设置立体效果
    imagefilledellipse($img, 150, $i, 100, 60, $darkgray);
}
imagefilledellipse($img, 150, 100, 100, 60, $gray);     // 绘制椭圆并填充
header('Content-Type: image/png');
imagepng($img);
imagedestroy($img);
