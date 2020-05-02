<?php
// 定义一个处理错误的函数
function customError($errno, $errstr)
{
   echo "<b>Error:</b> [$errno] $errstr";
}
// 设置自定义错误处理程序
set_error_handler('customError');
echo $student;    // 输出未定义的变量，触发错误
