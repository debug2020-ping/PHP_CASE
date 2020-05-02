<?php
class Calculate
{
    public $width = 10;
    public $height = 20;
    public function getArea()
    {
        return $this->width * $this->height;
    }
}
$classname = 'Calculate';
$c = new $classname();          // 实例化Calculate类
$attr1 = 'width';
echo '宽 = ' . $c->$attr1;      // 访问width属性
$attr2 = 'height';
echo '高 = ' . $c->$attr2;      // 访问height属性
$area = 'getArea';
echo '面积 = ' . $c->$area();   // 调用getArea()方法
