<?php
// 开启HttpOnly，完成防御XSS攻击的配置
//ini_set('session.cookie_httponly', 1);
session_start();
$xss = '" onclick="alert(document.cookie)';
echo '<input type="text" value="' . $xss . '">';
