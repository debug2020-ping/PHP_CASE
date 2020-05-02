<?php
for ($i = 1, $j = 10; $i < 20; $i++) {
    while ($j--) {
        if ($j == 5)
            goto end;
    }
}
echo '标识前：$i=' . $i . ',$j=' . $j;
end:
echo '标识后：$i=' . $i . ',$j=' . $j;