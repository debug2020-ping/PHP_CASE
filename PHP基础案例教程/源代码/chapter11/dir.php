<?php
$handle = opendir('C:/web');
while (false !== ( $file = readdir($handle))) {
    echo "$file<br>";
}
closedir($handle);
