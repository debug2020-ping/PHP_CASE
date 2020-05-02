<?php

$age = 10;
$score = 60;

// (1) if单分支语句
if ($age >= 18) {
    echo '已成年';
}

// (2) if...else语句
if ($age >= 18) {
    echo '已成年';
} else {
    echo '未成年';
}

// 三元运算符
echo $age >=18 ? '已成年' : '未成年';
echo $age ? : '还未出生';

// (3) if…elseif…else语句
if ($score >= 90) {
	echo '优秀';
} elseif ($score >= 80){
	echo '良好';
} elseif ($score >= 70){
	echo '中等';
} elseif ($score >= 60){
	echo '及格';
} else {
    echo '不及格';
}

// (4) switch语句
switch ( (int)($score/10) ) {
    case 10:  // 90~100为优
	case 9:  echo '优';  break;
	case 8:  echo '良';  break;
	default: echo '差';
}
