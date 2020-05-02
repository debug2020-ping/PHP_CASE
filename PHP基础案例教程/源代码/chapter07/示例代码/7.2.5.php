<?php
// 设定编码格式
header('Content-Type: text/html; charset=UTF-8');
// 响应404消息
header('HTTP/1.1 404 Not Found');
// 页面重定向
header('Location: login.php');
