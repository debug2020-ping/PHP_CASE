<?php
for ($i = 1; $i <= 5; $i++) {
    echo ' $i=' . $i;
    if ($i == 3) {
        break;
    }
}
echo ' ending';