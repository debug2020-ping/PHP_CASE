<?php
function selectSort($arr)
{
    for ($i = 0, $len = count($arr); $i < $len - 1; ++$i) {
        for ($j = $i + 1; $j < $len; ++$j) {  // 选出值最小的元素
            if ($arr[$j] < $arr[$i]) {
                $temp = $arr[$i];
                $arr[$i] = $arr[$j];
                $arr[$j] = $temp;
            }
        }
    }
    return $arr;
}

$arr = [9, 1, 2, 10, 4, 12];
// 输出结果：Array ( [0] => 1 [1] => 2 [2] => 4 [3] => 9 [4] => 10 [5] => 12 )
print_r(selectSort($arr));
