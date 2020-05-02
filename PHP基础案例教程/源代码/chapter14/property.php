<?php
class Person
{
    public $name = 'Tom';
    public $age;
}
$p = new Person ();
echo $p->name;           // 获取默认属性值，输出结果：Tom
$p->name = 'Lucy';       // 修改默认属性值
echo $p->name;           // 输出结果：Lucy
$p->age = 15;            // 为属性设置值
echo $p->age;            // 输出结果：15
unset($p->age);          // 删除属性值
var_dump(isset($p->age));                    // 检测属性是否设置，输出结果：bool(false)
var_dump(property_exists('Person', 'age'));  // 检测属性是否定义，输出结果：bool(true)

/*isset()还可以根据具体的需求判断类或对象是否存在
$p = new Person();
unset($p);
var_dump(isset($p));          // 输出结果：bool(false)
*/