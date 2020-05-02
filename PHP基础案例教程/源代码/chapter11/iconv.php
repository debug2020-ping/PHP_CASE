<?php
// 在UTF-8编码的PHP脚本中书写的字符串是UTF-8编码
$content = '测试';
// 将UTF-8编码转换为GBK编码，保存到文件中
$content = iconv('UTF-8', 'GBK', $content);
file_put_contents('./test.txt', $content);
// 输出文件，并告知浏览器使用GBK编码显示
header('Content-Type: text/html; charset=GBK');
echo file_get_contents('./test.txt');
