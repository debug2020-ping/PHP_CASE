<?php
$name = 'test.jpg';                   // 指定下载后的文件名称
$file = './uploads/1490771521.dat';   // 保存待下载文件的实际保存路径
// 获取文件大小
$size = filesize($file);

// (1) 方式1：利用file_get_contents()获取
// 设置HTTP响应消息为文件下载
header('Content-Type: image/jpeg');
header('Content-Length: ' . $size);
header('Content-Disposition: attachment; filename="' . $name . '"');
// 读取文件并输出
echo file_get_contents($file);

/* (2) 方式2：利用指针方式读取
header('Content-Length: ' . $size);
header('Content-Disposition: attachment; filename="' . $name . '"');
// 定义读取文件用的变量
$limit = 1024;     // 指定每次读取的字节数
$count = 0;        // 记录已读取的字节数
// 读取文件并输出
$handle = fopen($file, 'r');
while (!feof($handle) && ($size - $count > 0)) {
    echo fread($handle, $limit);
    $count += $limit;
}
fclose($handle);
*/