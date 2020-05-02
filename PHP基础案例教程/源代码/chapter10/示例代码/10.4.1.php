<?php
$arr = ['Tom Lucy', 'PHP', 'pig cat', 'C'];
$matches = preg_grep('/^[a-zA-Z]*$/', $arr);
print_r($matches);    // 输出结果：Array( [1] => PHP [3] => C )