<?php
require './SessionDb.php';
new SessionDb();    // 配置Session入库
session_start();    // 启动Session
$_SESSION['test'] = 'content';
