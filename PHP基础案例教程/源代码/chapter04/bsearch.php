<?php
function bSearch($arr, $start, $len, $find)
{
    $end = $len - 1;
    $mid = round($len / 2);
    if ($start > $end) {
        return '查找失败';
    } elseif ($arr[$mid] > $find) {
        return bSearch($arr, $start, $mid - 1, $find);
    } elseif ($arr[$mid] < $find) {
        return bSearch($arr, $mid + 1, $end, $find);
    } else {
        return $mid;
    }
}
$arr = [1, 5, 9, 15, 28, 46, 98];   // 定义待查找数组
$len = count($arr);                 // 获取数组长度
echo bSearch($arr, 0, $len, 28);    // 输出结果：4
echo bSearch($arr, 0, $len, 10);    // 输出结果：查找失败
