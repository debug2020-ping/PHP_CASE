<?php
function bubbleSort($arr)
{
    // 外层循环控制需要比较的轮数
    for ($i = 1, $len = count($arr); $i < $len; ++$i) {
        for ($j = 0; $j < $len - $i; ++$j) {    // 内层循环控制参与比较的元素
            if ($arr[$j] > $arr[$j + 1]) {      // 比较相邻的两个元素
                $temp = $arr[$j];
                $arr[$j] = $arr[$j + 1];
                $arr[$j + 1] = $temp;
            }
        }
    }
    return $arr;
}

$arr = [10, 2, 5, 27, 98, 31];
// 输出结果：Array ( [0] => 2 [1] => 5 [2] => 10 [3] => 27 [4] => 31 [5] => 98 )
print_r(bubble($arr));
