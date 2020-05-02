<?php

// (1) 遍历数组
$info = ['id' => 1, 'usr' => 'Jacie', 'age' => 18];
// 使用方式一
foreach ($info as $k => $v) {
    echo $k . ': ' . $v . ' ';   // 输出的结果：id: 1 usr: Jacie age: 18
}
// 使用方式二
foreach ($info as $v) {
    echo $v . ' ';               // 输出的结果：1 Jacie 18
}

// (2) foreach的引用赋值
$arr1 = [1, 2, 3];
foreach ($arr1 as $v) {
    $v = $v + 2;
}
print_r($arr1);  // 输出结果：Array ( [0] => 1 [1] => 2 [2] => 3 )

// 对比查看结果
$arr2 = [1, 2, 3];
foreach ($arr2 as &$v) {
    $v = $v + 2;
}
print_r($arr2);  // 输出结果：Array ( [0] => 3 [1] => 4 [2] => 5 )