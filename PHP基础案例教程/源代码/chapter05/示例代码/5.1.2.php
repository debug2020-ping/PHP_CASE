<?php

// (1) Notice(E_NOTICE)
// ① 使用未定义的变量
echo $var;			// 提示信息“Notice: Undefined variable...”
// ② 使用未定义的常量
echo PI;			// 提示信息“Notice: Use of undefined constant...”
// ③ 访问不存在的数组元素
$arr = array();
echo $arr['age'];	// 提示信息“Notice: Undefined index: age...”


// (2) Warning(E_WARNING)
// ① 除法运算时，除数为0
echo 5 / 0;			// 提示信息“Warning: Division by zero...”
// ② 使用include包含不存在的文件
include '1234';		// 提示信息“Warning: include(): Failed opening...”


// (3) Fatal error(E_ERROR)
display();			// Fatal error: Uncaught Error: Call to undefined function...
echo 'test';		// 前一行发生错误，此行代码不会执行


// (4) Parse error(E_PARSE)
// 不合法的变量名
$123a = 'test';    // Parse error: syntax error...

