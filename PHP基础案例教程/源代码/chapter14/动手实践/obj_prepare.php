<?php
// ① 连接数据库、选择数据库、设置字符集
$mysqli = new MySQLi('localhost', 'root', '123456', 'itheima');
$mysqli->set_charset('utf8');
// ② 预处理SQL语句（$stmt是mysqli_stmt类的对象）
$stmt = $mysqli->prepare('INSERT INTO `student`(`name`,`gender`)VALUES(?,?)');
$data = [                                  // ③ 准备插入的数据
    ['name' => 'Tom', 'gender' => '男'], ['name' => 'Lucy', 'gender' => '女'],
    ['name' => 'Jimmy', 'gender' => '男'], ['name' => 'Jack', 'gender' => '男']
];
$stmt->bind_param('ss', $name, $gender);   // ④ 参数绑定、赋值
foreach ($data as $v) {
    $name = $v['name'];
    $gender = $v['gender'];
    $stmt->execute();                      // ⑤ 执行预处理的SQL语句
}
