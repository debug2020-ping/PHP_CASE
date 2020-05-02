<?php

$arr = ['puff', 'Tiramisu'];
array_pop($arr);              // 移出数组最后一个元素
print_r($arr);                // 输出结果：Array ( [0] => puff ) 
array_push($arr, 'cookie');   // 在数组末尾添加元素
print_r($arr);                // 输出结果：Array ( [0] => puff [1] => cookie ) 
array_unshift($arr, 22, 33);  // 在数组开头插入多个元素
print_r($arr);                // 输出结果： Array ( [0] => 22 [1] => 33 [2] => puff [3] => cookie ) 
array_shift($arr);            // 移出数组第一个元素
print_r($arr);                // 输出结果：Array ( [0] => 33 [1] => puff [2] => cookie )
