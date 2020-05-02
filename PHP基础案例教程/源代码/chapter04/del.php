<?php
$data = [
    1 => ['name' => 'Tom', 'hobby' => 'swimming'],
    2 => ['name' => 'Lucy', 'hobby' => 'sing'],
    3 => ['name' => 'Jacie', 'hobby' => 'running'],
    4 => ['name' => 'Jimmy', 'hobby' => 'basketball']
];
unset($data[2]);    // 删除键名为2的数组元素
echo '<pre>';
print_r($data);
echo '</pre>';

// 删除数组
unset($data);
print_r($data);
