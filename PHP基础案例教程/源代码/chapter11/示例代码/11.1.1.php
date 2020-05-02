<?php
// ① 相对路径
$filename = './123.txt';
echo file_get_contents($filename);    // 输出当前目录下的123.txt文件内容
// ② 绝对路径
$filename = 'C:/Windows/System32/drivers/etc/hosts';
echo file_get_contents($filename);    // 输出操作系统的hosts文件内容
