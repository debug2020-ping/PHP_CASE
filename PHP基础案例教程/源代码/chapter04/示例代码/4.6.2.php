<?php

// (1) 可变参数，用法1
function test()
{
    echo func_num_args();   // 获取传递的参数数量，输出结果：6
    // 输出传递的参数值
    foreach (func_get_args() as $v) {
        echo $v . ' ';      // 循环输出结果：A B C D E F
    }
    echo func_get_arg(1);   // 获取传递的第2个参数，输出结果：B
}
test('A', 'B', 'C', 'D', 'E', 'F');

// (2) 可变参数，用法2
function num(...$num)
{
    foreach ($num as $v) {
        echo $v . ' ';      // 循环输出结果：1 2 3 4 5 6 7 8 9 0
    }
}
num(1, 2, 3, 4, 5, 6, 7, 8, 9, 0);
