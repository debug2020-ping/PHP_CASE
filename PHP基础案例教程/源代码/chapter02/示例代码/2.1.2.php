<?php

// (1) echo
echo 'true';                 // 方式1，输出结果：true
echo 'result=', 4 + 3 * 3;   // 方式2，输出结果：result=13

// (2) print
print 'best';                // 输出结果：best

// (3) print_r()
print_r('hello');             // 输出结果：hello

// (4)var_dump()
var_dump(2);                  // 输出结果：int(2) 
var_dump('PHP', 'C');         // 输出结果：string(3) "PHP" string(1) "C"
