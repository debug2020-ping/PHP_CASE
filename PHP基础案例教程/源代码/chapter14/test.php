<?php
class Animal                // 定义动物类
{
    public $name;           // 定义成员属性
    public function shout() // 定义成员方法
    {
        echo '喵喵...';
    }
}
$animal1 = new Animal();    // 实例化动物类
$animal2 = new Animal();    // 实例化动物类
var_dump($animal1);         // 输出结果：object(Animal)#1 (1) { ["name"]=> NULL } 
var_dump($animal2);         // 输出结果：object(Animal)#2 (1) { ["name"]=> NULL }
