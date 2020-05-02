<?php
$visitor = 'man';
// ① 仅停止脚本
if (!isset($visitor)) {
    exit;
}
// ② 输出信息并停止脚本
if ($visitor !== 'woman') {
    exit('仅限女士');
}
// ③ exit()与逻辑运算符配合使用
$result = is_string($visitor) or exit('变量$visitor不合法！');
