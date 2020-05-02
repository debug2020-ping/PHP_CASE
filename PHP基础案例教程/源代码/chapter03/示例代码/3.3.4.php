<?php

// (1) 匿名函数
$sum = function($a, $b) {   // 定义匿名函数
    return $a + $b;
};
echo $sum(100, 200);        // 输出结果：300

// (2) 匿名函数使用外部变量
$c = 100;
$sum = function($a, $b) use($c) {
    return $a + $b + $c;
};
echo $sum(100, 200);        // 输出结果：400

// (3) 回调函数
function calculate($a, $b, $func)
{
    return $func($a, $b);
}
echo calculate(100, 200, function($a, $b) {    // 输出结果：300
    return $a + $b;
});
echo calculate(100, 200, function($a, $b) {    // 输出结果：20000
    return $a * $b;
});