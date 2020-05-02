<?php
// (1) 字符串运算符
$str = 'learning';
$html = 'Welcome to ' . $str . ' PHP';
echo $html;          // 输出结果：Welcome to learning PHP

// (2) 赋值运算符
$a = $b = $c = 5;    // 为三个变量同时赋值
// 定义变量
$i = 5;
$str = 'Hi ';
// “+=”运算符的使用
$i += 1;             // 等价于：$i = $i + 1;
// “.=”运算符的使用
$str .= 'Tom';       // 等价于：$str = $str . 'Tom';

// (3) 错误控制运算符
echo @(4 / 0);

// (4) 运算符优先级
echo 4 + 3 * 2;      // 输出结果：10
echo (4 + 3) * 2;    // 输出结果：14
