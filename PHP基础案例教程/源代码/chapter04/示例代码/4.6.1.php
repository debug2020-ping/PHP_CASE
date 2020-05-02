<?php

// (1) 字符串转换成数组
// ① 字符串分割成数组
var_dump(explode('n', 'banana'));
// 输出结果：array(3) { [0]=> string(2) "ba" [1]=> string(1) "a" [2]=> string(1) "a" } 
// ② 分割时限制次数
var_dump(explode('n', 'banana', 2));
// 输出结果：array(2) { [0]=> string(2) "ba" [1]=> string(3) "ana" } 
// ③ 返回除了最后2个元素外的所有元素
var_dump(explode('n', 'banana', -2));
// 输出结果：array(1) { [0]=> string(2) "ba" }

// (2) 数组转换成字符串
// ① 利用指定字符连接一维数组元素的值
echo implode('-', ['a', 'b', 'c']);         // 输出结果：a-b-c
echo implode(',', ['a' => 1, 'b' => 2]);    // 输出结果：1,2
// ② 省略指定字符
echo implode(['a', 'b', 'c']);              // 输出结果：abc
// ③ 利用指定字符连接一个空数组
var_dump(implode('it', []));                // 输出结果：string(0) ""
