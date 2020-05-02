<?php
// 输出结果：Array ( [0] => swimming [1] => running )
print_r($_POST['hobby']);

// 接收代码
$_POST['user']['name'];
$_POST['user']['a'][1];
$_POST['user'][1]['b'];
$_POST['user']['c'][0];
$_POST['user'][2]['d'];
$_POST['user'][3][0];
$_POST['user'][3][1][0];
$_POST['user'][3][2][0];
$_POST['user'][4][0][2];
$_POST['user'][4][0][3];
?>

<input type="checkbox" name="hobby[]" value="swimming"> 游泳
<input type="checkbox" name="hobby[]" value="reading"> 读书
<input type="checkbox" name="hobby[]" value="running"> 跑步

<!-- 表单控件 -->
<input type="text" name="user[name]">
<input type="text" name="user[a][1]">
<input type="text" name="user[1][b]">
<input type="text" name="user[c][]">
<input type="text" name="user[][d]">
<input type="text" name="user[][]">
<input type="text" name="user[3][][]">
<input type="text" name="user[3][][]">
<input type="text" name="user[][][2]">
<input type="text" name="user[4][0][]">
