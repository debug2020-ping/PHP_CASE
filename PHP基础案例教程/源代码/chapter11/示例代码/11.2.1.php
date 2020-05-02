<?php
// (1) fgetc()函数
$filename = './test.txt';
file_put_contents($filename, 'itheima');
$handle = fopen($filename, 'r'); 
echo fgetc($handle);                    // 输出结果：i
echo fgetc($handle);                    // 输出结果：t

// (2) fgets()函数
$filename = './test.txt';
file_put_contents($filename, "123456\n78");
$handle = fopen($filename, 'r');
echo fgets($handle, 4);                         // 输出结果：123
echo str_replace("\n", '*', fgets($handle));    // 输出结果：456*

// (3) 写入文件
$filename = './test.txt';
$handle = fopen($filename, 'w');        // 以写入方式打开文件
fwrite($handle, 'test');                // 向文件中写入内容
echo file_get_contents($filename);      // 输出结果：test
fwrite($handle, '123456');              // 继续向文件中写入内容
echo file_get_contents($filename);      // 输出结果：test123456

// (4) 文件加锁机制
$handle = fopen('./lock.txt', 'w');
if (flock($handle, LOCK_EX)) {
    fwrite($handle, 'test');            // 取得独占锁定
    flock($handle, LOCK_UN);            // 释放锁定
} else {
    echo '文件不能被锁定';
}
