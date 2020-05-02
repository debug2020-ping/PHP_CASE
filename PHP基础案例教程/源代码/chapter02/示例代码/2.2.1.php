<?php

// (1) define()函数
define('PAI', '3.14');
define('R', '5', true);
echo '圆周率=', PAI;            // 输出结果：圆周率=3.14
echo '半径=', R;                // 输出结果：半径=5
echo '半径=', r;                // 输出结果：半径=5

// (2) const关键字
const R = 6;
const P = 2 * R;
echo 'P=', P;	// 输出结果：P=12
