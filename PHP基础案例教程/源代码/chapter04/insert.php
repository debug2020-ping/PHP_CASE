<?php
function insertSort($arr)
{
    for ($i = 1, $len = count($arr); $i < $len; ++$i) {    // 遍历无序数组
        for ($j = $i; $j > 0; --$j) {         // 遍历有序数组
            if ($arr[$j] < $arr[$j - 1]) {    // 无序与有序进行比较
                $temp = $arr[$j];
                $arr[$j] = $arr[$j - 1];
                $arr[$j - 1] = $temp;
            }
        }
    }
    return $arr;
}
$arr = [98, 7, 65, 54, 12, 6];
// 输出结果：Array ( [0] => 6 [1] => 7 [2] => 12 [3] => 54 [4] => 65 [5] => 98 )
print_r(insertSort($arr));
