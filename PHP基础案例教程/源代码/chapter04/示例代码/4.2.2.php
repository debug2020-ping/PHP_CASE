<?php

// (1) 访问数组元素
$sub = ['PHP', 'Java', 'C', 'Android'];
$data = ['goods' => 'clothes', 'num' => 49.90, 'sales' => 500];
echo $sub[1];           // 输出结果：Java
echo $sub[3];           // 输出结果：Android
echo $data['goods'];    // 输出结果：clothes
echo $data['sales'];    // 输出结果：500

// (2) 访问数组
echo '<pre>';
// 结果：Array([0] => PHP [1] => Java [2] => C [3] => Android)
print_r($sub);
// 结果：array(3) {["goods"]=>string(7) "clothes" ["num"]=>float(49.9) ["sales"]=>int(500)}
var_dump($data);
echo '</pre>';