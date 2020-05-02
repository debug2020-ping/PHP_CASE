<?php

// (1) 执行匹配
$result = preg_match('/web/', 'phpwebphpweb');
var_dump($result);    // 输出结果：int(1)

// (2) 获取匹配结果
preg_match('/bad/', 'bestbadbirdbad', $matches);
print_r($matches);    // 输出结果：Array ( [0] => bad )

// (3) 设置偏移量
preg_match('/bc/', 'abdbc', $matches, PREG_OFFSET_CAPTURE);
var_dump($matches);   // 输出结果：array(1) { [0]=> array(2) { [0]=> string(2) "bc" [1]=> int(3) }
