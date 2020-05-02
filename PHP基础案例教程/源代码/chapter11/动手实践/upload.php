<?php 
    // (1) 查看用户上的文件信息
    //var_dump($_FILES); 
    
    // (2) PHP处理上传文件    
    if (isset($_FILES['upload'])) {
        if ($_FILES['upload']['error'] !== UPLOAD_ERR_OK) {
            exit('上传失败。');
        }
        $save = './uploads/' . time() . '.dat';
        if (!move_uploaded_file($_FILES['upload']['tmp_name'], $save)) {
            exit('上传失败，无法将文件保存到指定位置。');
        }
        echo "上传成功，保存路径：<a href=\"$save\" target=\"_blank\">$save</a>";
    }

?>
<form method="post" enctype="multipart/form-data">
  <input type="hidden" name="MAX_FILE_SIZE" value="1048576">
  <input type="file" name="upload">
  <input type="submit" value="上传文件">
</form>