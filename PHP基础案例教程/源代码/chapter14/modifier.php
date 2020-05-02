<?php
class User
{
    public $name = 'Tom';               // 姓名
    protected $tel = '400-618-4000 ';   // 电话
    private $funds = 5000;              // 存款
    // 在User类中添加如下的方法
    public function getfunds()
    {
        return $this->funds;
    }
    // 在User类中添加如下方法
    public function __call($name, $args)
    {
        echo $name, '-';
        print_r($args);
    }
}
foreach (new User as $k => $v) {        // 输出结果：name = Tom
    echo $k . ' = ' . $v;
}

// 在User类外进行测试
$user = new User();
echo $user->funds;       // 无法访问私有属性
echo $user->getFunds();  // 输出结果：5000

// 在User类外进行测试
$user = new User();
$user->show('age', 'tel');  // 输出结果：show-Array ( [0] => age [1] => tel )