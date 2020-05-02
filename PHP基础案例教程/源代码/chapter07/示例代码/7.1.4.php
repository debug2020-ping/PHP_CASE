<?php

// (1) nl2br()
echo nl2br("123\n456", false);

// (2) strip_tags()
$html = <<<'EOD'
<ul><li>苹果</li><li>香蕉</li></ul>
123<test>456</test><aaa>789
EOD;
echo strip_tags($html);

// (3) htmlspecialchars()和htmlspecialchars_decode()
$html = "123<br>4'56";
$html = htmlspecialchars($html, ENT_QUOTES | ENT_HTML5);
echo $html, "\n";
$str = htmlspecialchars_decode($html, ENT_QUOTES | ENT_HTML5);
echo $html;

// 对空格进行转换
$html = ' 123 ';
echo str_replace(' ', '&nbsp;', $html);   // 转换结果：&nbsp;123&nbsp;

// (4) urlencode()和urldecode()
$name = 'A&B C';
$name = urlencode($name);   // URL 编码
echo "http://localhost/test.php?name=$name", "\n";
echo urldecode($name);	    // URL解码


// (5) http_build_query()
$params = [
	'name' => 'test',
	'hobby' => ['reading', 'running']
];
$query = http_build_query($params);
echo "http://localhost/test.php?$query";
