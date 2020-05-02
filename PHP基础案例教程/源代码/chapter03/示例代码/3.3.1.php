<?php
function num()
{
    //$i = 1;
    static $i = 1;  // 设置静态变量
    echo $i;
    ++$i;
}
