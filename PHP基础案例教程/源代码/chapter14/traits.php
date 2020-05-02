<?php
class Animal {}
trait Cat
{
    public function shout()
    {
        echo '喵喵';
    }
}
class PersianCat extends Animal
{
    use Cat;
    public function __construct()
    {
        $this->shout();
    }
}
$cat1 = new PersianCat();    // 输出结果：喵喵
