<?php
$num = [2, 4];
$alp = ['a', 'b', 'c'];
$mer1 = $num + $alp;
$mer2 = $alp + $num;
print_r($mer1);   // 输出结果：Array ( [0] => 2 [1] => 4 [2] => c ) 
print_r($mer2);   // 输出结果：Array ( [0] => a [1] => b [2] => c )
