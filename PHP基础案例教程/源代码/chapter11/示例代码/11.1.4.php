<?php

// (1) 创建目录
mkdir('./test');                       // 创建目录
mkdir('./test1/test2', 0777, true);    // 递归创建目录（若test1不存在会自动创建）

// (2) 删除目录
rmdir('./test');                 // 删除空目录（删除成功）
rmdir('./test1');                // 删除非空目录（删除失败）
rmdir('./test1/test2');          // 删除空目录（删除成功）

// (3) 遍历目录
print_r(glob('./*'));            // 获取当前目录下的文件列表
print_r(glob('./*.txt'));        // 获取当前目录下所有的“txt”扩展名的文件

// (4) 查看磁盘大小和可用空间
echo disk_total_space('D:');     // 获取D盘总大小
echo disk_free_space('D:');      // 获取D盘可用空间大小
