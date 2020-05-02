<?php
// (1) 定位符
$subject = "It's a nice day today";
// 匹配字符串开始的位置
preg_match('/^It/', $subject, $matches);
print_r($matches);       // 输出结果：Array ( [0] => It )
// 匹配字符串结束的位置
preg_match('/today$/', $subject, $matches);
print_r($matches);       // 输出结果：Array ( [0] => today )

// (2) 选择符
preg_match_all('/34|56|78/', '123456', $matches);
print_r($matches);       // 输出结果：Array ( [0] => Array ( [0] => 34 [1] => 56 ) )