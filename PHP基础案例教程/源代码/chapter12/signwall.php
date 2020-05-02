<?php
$img = imagecreatetruecolor(200, 200); // 创建画布
$white = imagecolorallocate($img, 255, 255, 255);
$color = imagecolorallocate($img, 0, 0, 0);
imagefill($img, 0, 0, $white);
$name = ['Tom', 'Jimmy', 'Lucy', '王明', '李三岁'];
$fonts = ['simhei.ttf', 'simkai.ttf', 'msyh.ttf'];
foreach ($name as $v) { // 制作签名墙
    $size = mt_rand(12, 28);
    $angle = mt_rand(-70, 70);
    $x = mt_rand(10, 150);
    $y = mt_rand(10, 150);
    $font = 'C:/windows/Fonts/' . $fonts[array_rand($fonts)];
    imagettftext($img, $size, $angle, $x, $y, $color, $font, $v);   // 绘制文本
}
header('Content-Type: image/png');
imagepng($img);
imagedestroy($img);
