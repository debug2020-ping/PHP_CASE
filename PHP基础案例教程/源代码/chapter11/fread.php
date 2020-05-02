<?php
// 准备测试文件
$filename = './test.txt';
file_put_contents($filename, '您好，欢迎来到黑马程序员！');
// 以只读方式打开文件
$handle = fopen($filename, 'r');
// 从文件中读取前9个字节（1个UTF-8中文占3个字节）
echo fread($handle, 9), '<br>';	
// 从上一次读取的位置继续读取，直到末尾
echo fread($handle, filesize($filename));
// 关闭文件
fclose($handle);


/*倒回文件指针的位置
$handle = fopen('./test.txt', 'r');  // 打开文件
fread($handle, 9);          // 读取9个字节
echo ftell($handle);        // 输出结果：9
rewind($handle);            // 倒回文件指针
echo ftell($handle);        // 输出结果：0
*/