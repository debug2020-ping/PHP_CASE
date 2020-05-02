<?php
$i = $sum = 0;      // 初始化变量
while ($i < 5) {    // 循环条件
    echo ' $i=' . $i;
    $sum += $i;
    ++$i;           // 设置循环出口
}
echo '<br> $sum=' . $sum;