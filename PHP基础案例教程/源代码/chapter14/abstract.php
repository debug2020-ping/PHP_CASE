<?php
abstract class sport
{
    public abstract function status();
}
class Run extends sport
{
    public function status()
    {
        echo 'Long Distance Running ';
    }
}
$runners = new Run();
$runners->status(); // 输出结果：Long Distance Running
