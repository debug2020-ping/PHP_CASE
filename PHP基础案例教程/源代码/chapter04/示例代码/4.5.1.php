<?php

// (1) 通过指针函数访问数组
$arr = ['a', 'b', 'c', 'd'];
echo key($arr) . ' - ' . current($arr);    // 获取当前指针指向的键和值：0 - a
echo next($arr);                           // 将当前指针向前移动一位：b
echo end($arr);                            // 将当前指针指向最后一个元素：d
echo prev($arr);                           // 将当前指针倒回一位：c
echo reset($arr);                          // 将指针指向第1个元素：a

// (2) 通过each()函数访问数组
// 输出each()返回的数组
$arr = ['sub' => 'PHP'];
echo '<pre>';
// 输出结果:Array ([1] => PHP[value] => PHP [0] => sub[key] => sub)
print_r(each($arr));
echo '</pre>';

// (3) 指针方式遍历数组
$sweets = ['Muffin', 'cookie', 'cake'];
while (list($k, $v) = each($sweets)) {
    $curr = current($sweets);   // 此时指针已经被each()移动到了下一位
    // 输出结果：0 => Muffin-cookie 1 => cookie-cake 2 => cake-
    echo "{$k} => {$v}-{$curr} ";
}