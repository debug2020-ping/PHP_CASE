<?php
// (1) 布尔型
$flag1 = true;      // 为变量$flag1赋一个布尔类型的值true
$flag2 = false;     // 为变量$flag2赋一个布尔类型的值false

// (2) 整型
$oct = 012;         // 八进制数
$dec = 10;          // 十进制数
$hex = 0xa;         // 十六进制数

// (3) 浮点型
$fnum1 = 5.59;      // 标准格式
$fnum2 = -6.82;     // 标准格式
$fnum3 = 3.14E6;    // 科学计数法格式3.14*106
$fnum4 = 4.46E-3;   // 科学计数法格式4.46*10-3

// (4) 字符串型
$str = '方向的';
echo "PHP{$str}程序员";  // 输出结果为：PHP方向的程序员

// 数据类型检测 ①
$a = 1;
var_dump($a);        // 输出结果：int(1)
$a = $a + 2.0;
var_dump($a);        // 输出结果：float(3)

// 数据类型检测 ②
var_dump( is_bool('1') );           // 输出结果：bool(false)
var_dump( is_string('php') );       // 输出结果：bool(true)
var_dump( is_float('23') );         // 输出结果：bool(false)
var_dump( is_int('23.0') );         // 输出结果：bool(false)
var_dump( is_numeric('45.6') );     // 输出结果：bool(true)
