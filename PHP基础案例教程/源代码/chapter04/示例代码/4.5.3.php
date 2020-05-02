<?php
$weather = ['sun', 'rain', 'haze'];
asort($weather);     // 保持键值关系正序排序
print_r($weather);   // 输出结果：Array ( [2] => haze [1] => rain [0] => sun ) 
sort($weather);      // 按正常类型正序排序
print_r($weather);   // 输出结果：Array ( [0] => haze [1] => rain [2] => sun ) 
rsort($weather);     // 按正常类型倒序排序：
print_r($weather);   // 输出结果：Array ( [0] => sun [1] => rain [2] => haze )
