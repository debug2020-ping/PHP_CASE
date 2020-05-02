<?php
// 将错误信息发送到php.ini中的error_log配置的日志中
error_log('error message a');
// 将错误信息发送到指定日志文件中
error_log ('error message b', 3, 'C:/web/php.log');
