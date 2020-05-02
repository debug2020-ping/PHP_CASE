<?php

// (1) 定义索引数组
$fruits = array('apple', 'grape', 'pear');              // 省略键名
$sports = array(2 => 'basketball', 4 => 'swimming');    // 指定键名

// (2) 定义关联数组
$info = array('id' => 10, 'name' => 'Tom', 'tel' => 18810888188);

// (3) 定义混合数组
$temp = array();
$mixed = array(2, 'str', 'id' => 5, 5 => 'b', 'a');

// (4) 定义多维数组
$data = array(
    0 => array('name' => 'Tom', 'gender' => '男'),
    1 => array('name' => 'Lucy', 'gender' => '女'),
    2 => array('name' => 'Jimmy', 'gender' => '男')
);

// (5) 数组赋值方式
$arr[] = 123;             // 存储结果：$arr[0] = 123
$arr[] = 'hello';         // 存储结果：$arr[1] = 'hello'
$arr[4] = 'PHP';          // 存储结果：$arr[4] = 'PHP'
$arr['name'] = 'Tom';     // 存储结果：$arr['name'] = 'Tom'
$arr[] = 'Java';          // 存储结果：$arr[5] = 'Java'

// (6) 短数组定义法（[]）
$weather = ['wind', 'fine'];             // 相当于：array('wind', 'fine')
$object = ['id' => 12, 'name' => 'PHP']; // 相当于：array('id' => 12, 'name' => 'PHP')
$num = [[1, 3], [2, 4]];                 // 相当于：array(array(1, 3), array(2, 4))
