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
 * 生成缩略图（等比例缩放）
 * @param string $file 原图的路径
 * @param int $limit 缩略图最大限制宽和高（像素）
 * @return resource
*/
function thumb($file, $limit)
{
    $info = getimagesize($file);    // 获取原图信息
    list($src_w, $src_h) = $info;   // 获取原图宽高
    $mime = $info['mime'];          // 获取原图MIMI类型
    // 先将目标宽高设置为原图宽高,若判断不成立，则说明原图宽高低于限制值，无需缩放
    list($dst_w, $dst_h) = [$src_w, $src_h];
    if ($src_w / $limit > $src_h / $limit) {
        if ($src_w > $limit) {      // 当宽度较大时，如果超出限制，则按宽进行缩放
            $dst_w = $limit;
            $dst_h = round($dst_w * $src_h / $src_w);
        }
    } else {
        if ($src_h > $limit) {      // 当高度较大时，如果超出限制，则按高进行缩放
            $dst_h = $limit;
            $dst_w = round($dst_h * $src_w / $src_h);
        }
    }
    $src = $GLOBALS['func'][$mime]($file);          // 依据原图路径创建图像画布资源
    $dst = imagecreatetruecolor($dst_w, $dst_h);    // 创建目标缩略图资源
    // 将原图缩放填充到缩略图画布中
    imagecopyresampled($dst, $src, 0, 0, 0, 0, $dst_w, $dst_h, $src_w, $src_h);
    return $dst;
}

$path = './images/1.jpg';               // 保存原图的路径
$mime = getimagesize($path)['mime'];    // 获取原图的MIME
$thumb = thumb($path, 200);             // 生成缩略图资源
header("Content-Type: $mime");          // 指定输出图像的MIME
$func[$mime]($path,$thumb);             // 根据原图MIME输出缩略图
