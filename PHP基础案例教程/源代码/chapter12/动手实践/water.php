<?php
$func = [
    'image/png' => function ($file, $img = null) {
        return $img ? imagepng($img) : imagecreatefrompng($file);
    },
    'image/jpeg' => function ($file, $img = null) {
        return $img ? imagejpeg($img) : imagecreatefromjpeg($file);
    },
    'image/gif' => function ($file, $img = null) {
        return $img ? imagegif($img) : imagecreatefromgif($file);
    }
];

/**
 * 添加水印功能
 * @param resource $srcfile 原图路径
 * @param resource $watfile 水印图片路径
 * @param int $pact 水印合并效果，默认为100 
 * @param int $postion 添加水印位置，1表示左上角
 */
function watermark($srcfile, $watfile, $pct = 100, $postion = 1)
{
    // 根据MIME类型和路径完成原图和水印图片资源的创建
    $src_mime = getimagesize($srcfile)['mime'];
    $wat_mime = getimagesize($watfile)['mime'];
    $src = $GLOBALS['func'][$src_mime]($srcfile);
    $wat = $GLOBALS['func'][$wat_mime]($watfile);
    // 从数组中获取原图和水印图片的宽和高
    list($src_w, $src_h) = getimagesize($srcfile);
    list($wat_w, $wat_h) = getimagesize($watfile);
    switch ($postion) {
       case 1: // 左上
            $src_x = $src_y = 0;                break;
        case 2: // 右上
            $src_x = $src_w - $wat_w;
            $src_y = 0;                        break;
       case 3: // 中间
           $src_x = ($src_w - $wat_w) / 2;
           $src_y = ($src_h - $wat_h) / 2;    break;
       case 4: // 左下
            $src_x = 0;
            $src_y = $src_h - $wat_h;        break;
       case 5: // 右下
            $src_x = $src_w - $wat_w;
            $src_y = $src_h - $wat_h;        break;
    }
    imagecopymerge($src, $wat, $src_x, $src_y, 0, 0, $wat_w, $wat_h, $pct);
    return $src;
}

$source = './images/1.jpg';
$water = './images/6.jpg';
$mime = getimagesize($source)['mime'];      // 获取原图MIME类型
$wat = watermark($source, $water, 50, 4);   // 生成水印图片
header("Content-Type: $mime");              // 指定水印图片的MIME类型
$func[$mime]($source,$wat);                 // 输出水印图片
