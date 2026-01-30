<?php

$arr = [20, 45, 55, 74, 12, 83, 9, 55, 78, 83];

$len = 0;
$index = -1;
$target = 823;

while (isset($arr[$len])) $len++;

for ($i = 0; $i < $len; $i++) {
    if ($target == $arr[$i]) {
        $index = $i;
        break;
    }
}
if ($index > -1) {
    echo 'first occurance on index: ' . $i;
} else {
    echo "Not found";
}
