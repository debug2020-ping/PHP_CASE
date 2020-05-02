<?php
class Person
{
    public function show()
    {
        self::introduce();    // 优先访问父类方法
        static::introduce();  // 优先访问子类方法
    }
    public static function introduce()
    {
        echo '[Person]';
    }
}
class Student extends Person
{
    public function show()
    {
        parent::show();       // 子类调用父类方法
    }
    public static function introduce()
    {
        echo '[Student]';
    }
}
$s1 = new Student();
$s1->show();                  // 输出结果：[Person][Student]
