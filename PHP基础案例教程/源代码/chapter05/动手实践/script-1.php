<?php
// 记录开始时间
$start = microtime(true);
// 执行运算
for ($i = 0; $i < 3000000; ++$i) { }
// 记录结束时间
$end = microtime(true);
// 计算从开始到结束之间经过的时间
echo $end - $start;    // 参考输出结果：0.43202495574951
