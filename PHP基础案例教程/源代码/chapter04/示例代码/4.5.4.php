<?php
$data = ['a' => 1, 'b' => 2, 'c' => 3];
var_dump(in_array(2, $data));           // 输出结果：bool(true)
var_dump(array_search(2, $data));       // 输出结果：string(1) "b" 
var_dump(array_key_exists(2, $data));   // 输出结果：bool(false)
