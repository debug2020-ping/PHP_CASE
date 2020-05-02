<?php

// (1) 执行匹配
$result = preg_match_all('/web/', 'phpwebphpweb');
var_dump($result);    // 输出结果：int(2)

// (2) 获取匹配结果
preg_match_all('/na/', ' banana ', $matches);
print_r($matches);    // 输出结果：Array ( [0] => Array ( [0] => na [1] => na ) )

// (3) 设置匹配结果保存形式
preg_match_all('/na/', ' banana ', $matches, PREG_SET_ORDER);
// 输出结果：Array ( [0] => Array ( [0] => na ) [1] => Array ( [0] => na ) )
print_r($matches); 

