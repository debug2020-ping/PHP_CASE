<?php
$a = ['a', 'b', 'c'];
echo memory_get_usage();        // 输出结果：354880
$e = $d = $c = $b = $a;
echo memory_get_usage();        // 输出结果：354880
$e[] = 'e';
echo memory_get_usage();        // 输出结果：355152
unset($e);
echo memory_get_usage();        // 输出结果：354880
echo memory_get_peak_usage();   // 输出结果：388200（内存峰值）
