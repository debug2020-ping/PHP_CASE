<?php
function sum($a, $b)
{
    return $a + $b;
}
call_user_func('sum', 4, 5);    // 输出结果：9