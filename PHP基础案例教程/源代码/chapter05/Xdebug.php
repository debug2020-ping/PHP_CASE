<?php
function aaa()
{
    bbb();
}
function bbb()
{
    require 'ccc.php';	 // 引入不存在的文件，使程序出错
}
aaa();
