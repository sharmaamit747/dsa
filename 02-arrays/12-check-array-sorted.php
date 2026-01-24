<?php

$arr = [40, 58, 72, 45, 158, 255];
$length = 0;

foreach ($arr as $val) {
    $length++;
}

$isSorted = true;

for ($i = 0; $i < $length; $i++) {
    if ($arr[$i] > $arr[$i + 1]) {
        $isSorted = false;
        break;
    }
}
print_r($isSorted);
