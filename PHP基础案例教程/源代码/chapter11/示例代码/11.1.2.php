<?php

// 重命名 test.txt 为 test.bak
rename('./test.txt', './test.bak');
// 移动 test.bak 到 C:/web/test.txt
rename('./test.bak', 'C:/web/test.txt');

// 在当前目录下复制文件
copy('./test.txt', './new.txt');
// 跨目录复制文件
copy('./123/test.txt', './456/new.txt');

// 文件删除
unlink('./test.txt');

// 判断文件是否存在
var_dump( file_exists('./123/1.txt') );    // 文件存在，输出结果：bool(true)
var_dump( file_exists('./123/2.txt') );    // 文件不存在，输出结果：bool(false)
var_dump( is_file('./123/1.txt') );        // 输出结果：bool(true)
var_dump( is_file('./123') );              // 输出结果：bool(false)
var_dump( is_dir('./123/1.txt') );         // 输出结果：bool(false)
var_dump( is_dir('./123') );               // 输出结果：bool(true)
