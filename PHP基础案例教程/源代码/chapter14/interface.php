<?php
interface ComInterface
{
    public function connect();      // 开始连接
    public function transfer();     // 传输数据
    public function disconnect();   // 断开连接
}
class MobilePhone implements ComInterface
{
    public function connect()
    {
        echo '连接开始...';
    }
    public function transfer()
    {
        echo '传输数据开始...传输数据结束';
    }
    public function disconnect()
    {
        echo '连接断开...';
    }
}
