<?php

// (1) 截取给定路径中的字符串
$url = 'C:\web\apache2.4\htdocs\cat.jpg';
$pos = strrpos($url, '\\');
// 截取文件名称，输出结果：cat.jpg
echo substr($url, $pos + 1);
// 截取文件所在的路径，输出结果：C:\web\apache2.4\htdocs
echo substr($url, 0, $pos);

// (2) 替换指定位数的字符
$tel = '18810881888';                           // 指定的手机号
$len = 4;                                       // 需要覆盖的手机号长度
$replace = str_repeat('*', $len);               // 根据指定长度设置覆盖的字符串
echo substr_replace($tel, $replace, 3, $len);   // 输出结果： 188****1888

// (3) 过滤字符串中的空白字符
$str = '   These are a few words :) ...   ';
echo '原字符串：' . $str . '<br>';
echo '去空白后的字符串：' . trim($str);

// (4) 字符串的比较
if (strcmp('ye_PHP', 'yePHP')) {
    echo 'not the same string';
} else {
    echo 'the same string';
}

// (5) 获取字符串的长度
$str = 'PHP程序设计基础教程';
echo strlen($str);              // 输出结果：27
echo mb_strlen($str, 'UTF-8');  // 输出结果：11
