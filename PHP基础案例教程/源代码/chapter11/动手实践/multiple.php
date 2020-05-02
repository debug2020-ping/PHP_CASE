<?php
if (!empty($_FILES)) {
    // 获取上传文件的名称
    echo $_FILES['upload']['name'][0];   // 第1个文件
    echo $_FILES['upload']['name'][1];   // 第2个文件
    // 获取错误代码
    echo $_FILES['upload']['error'][0];  // 第1个文件
    echo $_FILES['upload']['error'][1];  // 第2个文件
}
?>
<form method="post" enctype="multipart/form-data">
    <!-- 方式1 -->
    <input type="file" name="upload_1">
    <input type="file" name="upload_2">
    <!-- 方式2 -->
    <input type="file" name="upload[]">
    <input type="file" name="upload[]">
    <!-- 方式3 -->
    <input type="file" name="upload[]" multiple>
    <input type="submit" value="上传文件">
</form>