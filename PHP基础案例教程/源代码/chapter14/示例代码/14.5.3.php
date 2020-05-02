<?php
interface Goods
{
    public function getName();
    public function getPrice();
}
// 定义Phone类实现Goods接口
class Phone implements Goods
{
    public function getName()
    {
        return '手机';
    }
    public function getPrice()
    {
        return '2000';
    }
}
// 定义Computer类实现Goods接口
class Compter implements Goods
{
    public function getName()
    {
        return '电脑';
    }
    public function getPrice()
    {
        return '4500';
    }
}
// 定义其他商品类，实现Goods接口...

function price(Goods $g)
{
    return $g->getName() . '的价格是' . $g->getPrice();
}

$goods = new Phone();   // 实例化商品类
price($goods);          // 获取对应商品的价格，输出结果：手机的价格是2000

