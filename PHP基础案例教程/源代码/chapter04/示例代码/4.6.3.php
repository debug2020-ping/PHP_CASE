<?php
function test($a, $b)
{
	echo "$a, $b";
}
echo call_user_func_array('test', [10, 20]);    // 输出结果：10, 20