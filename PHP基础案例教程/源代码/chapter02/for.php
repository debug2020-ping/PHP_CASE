<?php
for ($i = 1, $sum = 0; $i <= 100; ++$i) {
    if ($i % 2 == 0) {
        $sum += $i;
    }
}
echo '1~100之间的偶数和：' . $sum;