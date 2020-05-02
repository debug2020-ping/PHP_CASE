<?php

// ① 设置Cookie
setcookie('aaa', '123');       // 设置一个名称为aaa的Cookie，其值为123
setcookie('bbb', '456');       // 设置一个名称为bbb的Cookie，其值为456
// ② 设置Cookie过期时间
setcookie('data', 'PHP');                          // 未指定过期时间，在会话结束时过期
setcookie('data', 'PHP', time() + 1800);           // 30分钟后过期
setcookie('data', 'PHP', time() + 60 * 60 * 24);   // 一天后过期
