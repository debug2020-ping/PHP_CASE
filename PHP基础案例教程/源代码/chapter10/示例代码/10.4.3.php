<?php

// (1) 按照规则分割
$arr = preg_split('/[@,\.]/', 'abc@163.com');
print_r($arr);    // 输出结果：Array( [0] => abc [1] => 163 [2] => com )


// (2) 指定分割次数
$arr = preg_split('/a/', 'banana', 2);
print_r($arr);    // 输出结果：Array( [0] => b [1] => nana )


// (3) 指定返回值形式
$str = 'one, two three';
// 按照空白字符和逗号分割字符串
$arr = preg_split('/[\s,]/', $str, -1, PREG_SPLIT_NO_EMPTY);
print_r($arr);  //  输出结果：Array ( [0] => one [1] => two [2] => three )
