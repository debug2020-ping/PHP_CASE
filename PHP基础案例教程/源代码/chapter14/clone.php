<?php
class Test
{
    public $flag = 1;
	public function __clone()
	{
		$this->flag = 'open';  // 克隆时，重新为属性赋值
	}
}
$a = new Test();
$b = $a;
$a->flag = 3;
var_dump($a->flag);  // 输出结果：int(3)
var_dump($b->flag);  // 输出结果：int(3)

/*
// 对象克隆
$b = clone $a;
var_dump($a->flag);  // 输出结果：int(3)
var_dump($b->flag);  // 输出结果：int(1)
*/