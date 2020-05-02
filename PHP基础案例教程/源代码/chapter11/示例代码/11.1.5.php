<?php
// (1) basename()函数
$path = 'C:/web/apache2.4/htdocs/index.html';
echo basename($path);               // 输出结果：index.html
echo basename($path, '.html');      // 输出结果：index

// (2) dirname()函数
$path = 'C:/web/apache2.4/htdocs/index.html';
echo dirname($path);       // 输出结果：C:/web/apache2.4/htdocs
echo dirname($path, 2);    // 输出结果：C:/web/apache2.4
echo dirname($path, 3);    // 输出结果：C:/web

// (3) pathinfo()函数
$path = 'C:/web/apache2.4/htdocs/index.html';
$info = pathinfo($path);
echo $info['dirname'];     // 输出结果：C:/web/apache2.4/htdocs
echo $info['basename'];    // 输出结果：index.html
echo $info['extension'];   // 输出结果：html
echo $info['filename'];    // 输出结果：index
