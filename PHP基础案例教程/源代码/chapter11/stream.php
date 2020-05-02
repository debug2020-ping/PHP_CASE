<?php
// 准备POST方式发送的数据
$data = http_build_query(['name' => 'test', 'age'=> '18']);
// 定义资源流的选项
$options = [
    'http' => [
        'method' => 'POST',
        'header' => "Content-Type: application/x-www-form-urlencoded\r\n".
                    'Content-Length: ' . strlen($data) . "\r\n",
        'content' => $data
    ]
];
// 创建资源流上下文
$context = stream_context_create($options);
// 发送请求并获取响应结果
echo file_get_contents('http://localhost/test.php', false, $context);
