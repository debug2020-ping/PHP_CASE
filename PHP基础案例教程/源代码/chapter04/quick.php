<?php
function quickSort($arr)
{
    // 获取待排序数组长度，当小于或等于1时直接返回数组（递归出口）
    $len = count($arr);
    if($len <= 1){
        return $arr;
    }
    // 设置基准元素（使用第1个元素）
    $pivot = $arr[0];
    $small = $big = [];
    // 根据基准元素，将数组分成2个部分：小于和大于
    for ($i = 1; $i < $len; ++$i) {
        if ($arr[$i] < $pivot) {         // 小于基准元素
            $small[] = $arr[$i];
        } else {                         // 大于等于基准元素
            $big[] = $arr[$i];
        }
    }
    //分别采用相同方案递归排序小于、大于部分的数组，然后进行合并
    return array_merge(quickSort($small), [$pivot], quickSort($big));
}
$arr = [31, 98, 5, 27, 2, 78];
// 输出结果：Array ( [0] => 2 [1] => 5 [2] => 27 [3] => 31 [4] => 78 [5] => 98 )
print_r(quickSort($arr));
