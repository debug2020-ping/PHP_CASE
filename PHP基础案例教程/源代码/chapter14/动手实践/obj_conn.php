<?php

// ① 在实例化时连接数据库，并选择数据库“itheima”
$mysqli = new mysqli('localhost', 'root', '123456', 'itheima');
// ② 调用mysqli对象中的方法，设置字符集
$mysqli->set_charset('utf8');
// ③ 执行SQL语句，获得结果集（$result是mysqli_result类的对象）
$result = $mysqli->query('SHOW TABLES');
// ④ 调用$result对象中的方法，处理结果集，获得关联数组结果
$data = $result->fetch_all(MYSQLI_ASSOC);
// ⑤ 输出关联数组结果
print_r($data);
