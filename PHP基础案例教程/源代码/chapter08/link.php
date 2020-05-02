<?php
// 连接数据库
$link = mysqli_connect('localhost', 'root', '123456', 'itheima', '3306');
// 查看连接数据库是否正确
echo $link ? '连接数据库成功' : '连接数据库失败';

// 屏蔽错误信息
//$link = @ mysqli_connect('localhost', 'root', '1') or exit('数据库连接失败');

// 设置字符集
mysqli_set_charset($link, 'utf8');  // 成功返回true，失败返回false
