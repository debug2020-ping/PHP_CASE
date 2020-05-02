<?php
class Teacher
{
    public $teacher = '老师';
    public function say($name)
    {
        echo $this->teacher . '说，' . $name . '是一个很用功的学生';
    }
}
$t = new Teacher ();
$t->say('Jimmy');    // 输出结果：老师说，Jimmy是一个很用功的学生
