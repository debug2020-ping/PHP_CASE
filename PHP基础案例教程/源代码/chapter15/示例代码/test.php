<?php
    print_r($_REQUEST);   // 输出结果：Array ( [a] => xxx [b] => yyy )
?>
<form method="post" action="test.php?a=xxx">
  <input type="text" name="b" value="yyy">
  <input type="submit" value="提交">
</form>
