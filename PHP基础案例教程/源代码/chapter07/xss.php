<?php
if (isset($_POST['content'])) {
    echo $_POST['content'];
    exit;
}
?>
<form method="post">
  <p>留言内容:</p>
  <textarea name="content" cols="40" rows="10"></textarea>
  <p><input type="submit" value="提交"></p>
</form>
