<?php
function total($path){
    $size = 0;
    $handle = opendir($path);
    while (false !== ($file = readdir($handle))) {
        if ($file != '.' && $file != '..') {
            $file = "$path/$file";
            $size += is_dir($file) ? total($file) : filesize($file);
        }
    }
    closedir($handle);
    return $size;
}
echo '当前目录大小为：', total('./'), '字节';
