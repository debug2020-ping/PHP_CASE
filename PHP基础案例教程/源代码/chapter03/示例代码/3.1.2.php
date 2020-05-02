<?php

// (1) 无参函数
function shout()
{
    return 'come on';
}
echo shout();        // 输出结果：come on


// (2) 按值传递参数
function add($a, $b)
{
    $a = $a + $b;
    return $a;
}
echo add(5, 7);      // 输出结果：12
$x = 5;
$y = 7;
echo add($x, $y);    // 输出结果：12


// (3) 引用传参
function extra(&$str)
{
    $str .= ' and some extra';
}

$var = 'food';
extra($var);
echo $var;            // 输出结果：food and some extra

// (4) 设置参数默认值
function say($p, $con = 'say "Hello"')
{
    return "$p $con";
}
echo say('Tom');      // 输出结果：Tom say "Hello"

// (5) 指定参数类型
function sum1(int $a, int $b)
{
    return $a + $b;
}
echo sum1(2.6, 3.8);  // 输出结果：5

// (6) 强类型的参数
declare(strict_types = 1);
function sum2(int $a, int $b)
{
    return $a + $b;
}
echo sum2(2.6, 3.8);  // 输出结果：Fatal error: ......

// (7) 设置函数返回值类型
declare(strict_types = 1);
function returnIntValue(int $value): int
{
    return $value + 1.0;
}
echo returnIntValue(5);