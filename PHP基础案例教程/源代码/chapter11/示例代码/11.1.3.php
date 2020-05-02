<?php
echo filetype('./123/1.txt');        // 输出结果：file
echo filetype('./123');              // 输出结果：dir
print_r(stat('./test.txt'));         // 统计信息