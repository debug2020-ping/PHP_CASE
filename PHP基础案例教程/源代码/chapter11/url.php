<?php
// 请求远程地址
$html = file_get_contents('http://www.itheima.com');
// 获取响应消息头
var_dump($http_response_header);
// 输出返回的信息
echo '<hr>' . htmlspecialchars($html);
