<?php
class Person
{
    public $name;
    public function __construct($name = 'XXX')
    {
        $this->name = $name;
    }
    public function show()
    {
        echo $this->name . '正在准备...';
    }
}
$p1 = new Person('Jim');
$p2 = new Person();
$p1->show(); // 输出结果：Jim正在准备....
$p2->show(); // 输出结果：XXX正在准备...
