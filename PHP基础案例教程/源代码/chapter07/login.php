<?php
	// (1) 查看用户提交的数据
    var_dump($_POST);
	// (2) 接收用户提交的数据
	if (isset($_POST['username']) && isset($_POST['password'])) {
		$username = $_POST['username'];
		$password = $_POST['password'];
	}
?>
<form method="post">
  用户名：<input type="text" name="username">
  密码：<input type="password" name="password">
  <input type="submit" value="登录">
</form>
