<?php
$filename = './write.txt';
$content = '黑马程序员 ';
file_put_contents($filename, $content);                // 替换整个文件
echo file_get_contents($filename), '<br>';
file_put_contents($filename, $content, FILE_APPEND);   // 以追加方式写入
echo file_get_contents($filename);
