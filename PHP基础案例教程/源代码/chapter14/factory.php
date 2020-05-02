<?php
class DbFactory
{
    public static function factory($classname)   // 工厂方法
    {
        if (include_once $classname . '.php') {
            return new $classname();
        } else {
            echo '对应的数据库类没找到';
        }
    }
}
$mysql = DbFactory::factory('MySQL');    // 获取MySQL对象
$oracle = DbFactory::factory('Oracle');  // 获取Oracle对象
$sqlite = DbFactory::factory('SQLite');  // 获取SQLite对象
