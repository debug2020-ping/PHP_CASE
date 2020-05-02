<?php
class Test
{
    public $flag;
}
$a = $b = new Test();
$c = new Test();
var_dump($a);           // 输出结果：object(Test)#1 (1) { ["flag"]=> NULL }
var_dump($b);           // 输出结果：object(test)#1 (1) { ["flag"]=> NULL } 
var_dump($c);           // 输出结果：object(Test)#2 (1) { ["flag"]=> NULL }
var_dump($a == $b);     // 输出结果：bool(true)
var_dump($a == $c);     // 输出结果：bool(true)
var_dump($a === $b);    // 输出结果：bool(true)
var_dump($a === $c);    // 输出结果：bool(false)

var_dump($a instanceof Test);    // 输出结果：bool(true)
var_dump($a instanceof Other);   // 输出结果：bool(false)
