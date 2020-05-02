<?php
// 读取脚本文件自身，遍历读取后的数组
foreach (file(__FILE__) as $k=>$v) {
    echo "Line #$k: $v";
}
