<?php
function search($arr, $find)
{ 
    foreach ($arr as $k => $v) {
        if ($find == $v) {
            return "{$find}在数组中的键名为：$k";
        }
    }
    return '查找失败';
}
$arr = [55, 9, 7, 62];
echo search($arr, 7);     // 输出结果：7在数组中的键名为：2
echo search($arr, 10);    // 输出结果: 查找失败
