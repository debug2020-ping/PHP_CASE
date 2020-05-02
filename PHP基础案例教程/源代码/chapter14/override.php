<?php
class Person
{
    public function introduce()
    {
        echo __CLASS__;
    }
}
class Student extends Person
{
    public  function introduce()
    {
        echo __CLASS__;
    }
}
$s1 = new Student();
$s1->introduce();      // 输出结果：Student
