<?php

// 测试，输出结果：Array ( [num] => Array ( [0] => 123 [1] => 456 ) )
print_r($_GET['num']);

$nums = isset($_GET['num']) ? (array)$_GET['num'] : [];
$sum = 0;
foreach ($nums as $v) {
    $sum += (float)$v;
}
echo 'sum = ' . $sum;
