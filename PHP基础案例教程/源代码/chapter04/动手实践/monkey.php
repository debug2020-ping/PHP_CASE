<!doctype html>
<html>
<head>
<style>
  .tb{height:30px;line-height:30px;font-family:'华文中宋';color:#ff0000;margin:0 auto;}
  .tb th{color:#444;font-size:20px;}
  .tb td:nth-child(1){font-weight:bold;color:#444;}
</style>
</head>
<body>
<?php
//编写函数获取猴王编号
function king($n, $m)
{
    $monkey = range(1, $n);
    $i = 0;
    while (count($monkey) > 1) {         // 循环猴子
        ++$i;
        $head = array_shift($monkey);    // 从前往后依次取出猴子
        // 判断是否踢出猴子，不踢则把该猴子返回尾部
        if ($i % $m != 0) {
            array_push($monkey, $head);
        }
    }
    return ['total' => $n, 'kick' => $m, 'king' => $monkey[0]];
}
//调用函数，取得数组结果
$data = king(10,7);
?>
<table class="tb">
  <tr><th colspan="2">找猴王游戏</th></tr>
  <tr><td>猴子总数：</td><td><?=$data['total']?></td></tr>
  <tr><td>踢出第m只猴子：</td><td><?=$data['kick']?></td></tr>
  <tr><td>猴王编号：</td><td><?=$data['king']?></td></tr>
</table>
</body>
</html>