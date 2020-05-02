<?php

// 正则表达式的使用
preg_match('/.*it/', 'ITheima');   // 匹配结果：0
preg_match('/.*it/i', 'ITheima');  // 匹配结果：1

// 正则表达式中的转义字符
preg_match('/\^/', '123^456', $matches);
print_r($matches);          // 输出结果：Array ( [0] => ^ )
preg_match('/\*/', '123*456', $matches);
print_r($matches);          // 输出结果：Array ( [0] => * )
preg_match('/\\\/', '123\456', $matches);
print_r($matches);          // 输出结果：Array ( [0] => \ )
