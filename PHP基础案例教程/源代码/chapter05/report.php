<?php
// 报告所有错误
error_reporting(E_ALL);
echo $info;
// 报告除了E_NOTICE之外的其他所有错误
error_reporting(E_ALL & ~E_NOTICE);
echo $info;
