<?php
// 将浮点型强制转换成布尔型
var_dump( (bool)-5.9 );      // 输出结果：bool(true)
echo '<br>';
// 将字符串型强制转换整型
var_dump( (int)'hello' );    // 输出结果：int(0)
echo '<br>';
// 将布尔型强制转换浮点型
var_dump( (float)false );    // 输出结果：float(0)
echo '<br>';
// 将整型强制转换字符串型
var_dump( (string)12 );      // 输出结果：string(2) "12"