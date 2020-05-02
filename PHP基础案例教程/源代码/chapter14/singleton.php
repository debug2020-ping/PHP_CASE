<?php
class Db
{
    private static $instance = null;   // 保存数据库实例对象
    private $link;                     // 保存数据库连接
    private function __construct()     // 声明构造方法为私有，阻止类外实例化
    {
        $this->link = mysqli_connect('localhost', 'root', '123456');
    }
    private function __clone(){ }           // 阻止用户复制对象实例
    public static function getInstance()    // 获取单例对象
    {
        if (self::$instance == null) {      // 判断当前对象是否被创建过
            self::$instance = new self();
        }
        return self::$_instance;
    }
}
// 实例化对象并测试
$db1 = Db::getInstance();
$db2 = Db::getInstance();
var_dump($db1 === $db2);
