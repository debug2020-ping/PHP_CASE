<?php
function dateVerify($date)
{
    $pattern = '/^[1-9]\d{3}-([1-9]|1[0-2])-([1-9]|[1-2]\d|3[01])$/';
    return (bool)preg_match($pattern, $date);
}
var_dump(dateVerify('89-10-15'));       // 输出结果：bool(false)
var_dump(dateVerify('1999-5-6'));       // 输出结果：bool(true)
var_dump(dateVerify('2008-08-08'));     // 输出结果：bool(false)
