<?php
// ① 替换字符串中匹配的内容
$str = "My Name is 'Tom'";
$pattern = "/\'(.*)\'/";      // 匹配规则
$replace = "'XXX'";           // 替换的内容
// 输出结果：My Name is 'XXX'
echo preg_replace($pattern, $replace, $str);
// ② 替换数组中匹配的内容
$arr = ['Php', 'Python', 'c'];
$pattern = '/p/i';            // 匹配规则
$replace = 'p';               // 替换的内容
// 输出结果：Array ( [0] => php [1] => python [2] => c )
print_r(preg_replace($pattern, $replace, $arr));

// ③ 匹配与替换的内容均为数组
$str = 'The quick brown fox jumps over the lazy dog.';
$pattern = ['/quick/', '/brown/', '/fox/'];    // 匹配规则数组
$replace = ['slow', 'black', 'bear'];          // 替换内容数组
// 输出结果：The slow black bear jumps over the lazy dog.
echo preg_replace($pattern, $replace, $str);

// ④ 限定替换次数
$str = '生如夏花之绚烂，死如秋叶之静美';
$pattern = '/之/';
$replace = '的';
// 输出结果：生如夏花的绚烂，死如秋叶之静美
echo preg_replace($pattern, $replace, $str, 1);

// ⑤ 获取替换的次数
preg_replace($pattern, $replace, $str, -1, $count);
echo $count;       // 输出结果：5







