<?php
class Student
{
    public function __destruct()
    {
        echo '正在执行析构方法……';
    }
}
$Student1 = new Student();
unset($Student1);  // 执行后输出结果：正在执行析构方法……

function test()
{
    $Student1 = new Student();
}
test();  // 执行后输出结果：正在执行析构方法……
