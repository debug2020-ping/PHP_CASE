<?php

// (1) cURL发送请求并获取响应信息
// 初始化一个cURL会话
$ch = curl_init();
// 设定请求的URL
curl_setopt($ch, CURLOPT_URL, 'http://www.itheima.com');
// 设定返回信息中包含响应消息头
curl_setopt($ch, CURLOPT_HEADER, 1);
// 设定curl_exec()函数将响应结果返回，而不是直接输出
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
// 执行一个cURL会话
$html = curl_exec($ch);
// 关闭一个cURL会话
curl_close($ch);
// 输出返回信息
echo $html;

/*
// (2) cURL发送请求并自定义请求头
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'http://localhost/test.php');
// 自定义请求头Referer
curl_setopt($ch, CURLOPT_REFERER, 'http://www.test.com/');
curl_exec($ch);
curl_close($ch);
*/

/*
// (3) cURL模拟表单提交
// 准备发送的数据
$data = [
	'name' => 'test',
	'password' => '123456'
];
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'http://localhost/test.php');
// 设定请求方式为POST
curl_setopt($ch, CURLOPT_POST, 1);
// 将数据编码后发送
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
curl_exec($ch);
curl_close($ch);
*/