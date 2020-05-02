<?php
// ① 保存和获取普通变量形式的Cookie
setcookie('test', 123);
echo isset($_COOKIE['test']) ? $_COOKIE['test'] : '';
// ② 保存和获取数组形式的Cookie
setcookie('history[one]', 4);
setcookie('history[two]', 5);
$history = isset($_COOKIE['history']) ? (array)$_COOKIE['history'] : [];
foreach ($history as $k => $v) {
    echo "$k - $v <br>";
}

// ③ 删除Cookie
setcookie('data', '', time() - 1);   // 立即过期（相当于删除COOKIE）