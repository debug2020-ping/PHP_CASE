<?php
// 连接数据库、设置字符集
$link = mysqli_connect('localhost', 'root', '123456', 'itheima');
mysqli_set_charset($link, 'utf8');
// ① 执行查询操作、处理结果集
if (!$result = mysqli_query($link, 'SELECT * FROM `student`')) {
    exit('执行失败。错误信息：'.mysqli_error($link));  // 获取错误信息
}
$data = mysqli_fetch_all($result, MYSQLI_ASSOC);
// ② 用完后，释放结果集
mysqli_free_result($result);
// ③ 执行插入操作，拼接SQL语句
$name = mysqli_real_escape_string($link, "PHP'学习者'coming");  // 转义特殊符号
if (!mysqli_query($link, "INSERT INTO `student` (`name`) VALUES ('$name')")) {
    exit('执行失败。错误信息：' . mysqli_error($link));
}
// ④ 获取最后插入的ID
$id = mysqli_insert_id($link);  // 获取AUTO_INCREMENT字段的自增值
// ⑤ 执行修改操作
if (!mysqli_query($link, "UPDATE `student` SET `name`='Garner' WHERE `id`>5")) {
    exit('执行失败。错误信息：' . mysqli_error($link));
}
// ⑥ 获取受影响的行数
$num = mysqli_affected_rows($link);  // 可获取UPDATE、DELETE等操作影响的行数
// ⑦ 关闭连接
mysqli_close($link);
