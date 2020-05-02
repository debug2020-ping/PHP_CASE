<?php

// (1) 演示函数的作用
$str = 'ABcd';
$upper = strtoupper($str);      // 调用strtoupper()函数将$str转换成大写
$lower = strtolower($str);      // 调用strtolower()函数将$str转换成小写
echo $upper;                    // 输出结果：ABCD
echo $lower;                    // 输出结果：abcd

// (2) 自定义函数
function generate_table($row, $col)
{
    $html = '<table>';
    for ($i = 1; $i <= $row; ++$i) {
        $html .= '<tr>';
        for ($j = 1; $j <= $col; ++$j) {
            $html .= '<td></td>';
        }
        $html .= '</tr>';
    }
    return $html.'</table>';
}
echo generate_table(4, 8);       // 生成4行8列的表格，并输出
echo generate_table(5, 10);      // 生成5行10列的表格，并输出