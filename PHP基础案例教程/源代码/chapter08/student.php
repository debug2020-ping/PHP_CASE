<?php
// 连接数据库、设置字符集
$link = mysqli_connect('localhost', 'root', '123456', 'itheima');
mysqli_set_charset($link, 'utf8');
// 获取查询结果集
$result = mysqli_query($link, 'SELECT * FROM `student`');
// 一次查询一行记录
echo '<table><tr><th>id</th><th>name</th><th>gender</th></tr>';
while ($row = mysqli_fetch_assoc($result)) {
    echo '<tr><td>' . $row['id'] . '</td>';
    echo '<td>' . $row['name'] . '</td>';
    echo '<td>' . $row['gender'] . '</td></tr>';
}
echo '</table>';

/*
// 一次查询所有记录
$data = mysqli_fetch_all($result, MYSQLI_ASSOC);
// 输出查询结果
var_dump($data);
*/