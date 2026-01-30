<?php

$arr = [20, 45, 55, 74, 12, 83, 9, 55, 20, 78, 83];

$len = 0;
$index = -1;
$target = 20;

while (isset($arr[$len])) $len++;

for ($i = 0; $i < $len; $i++) {
    if ($target == $arr[$i]) {
        $index = $i;
    }
}
if ($index > -1) {
    echo 'last occurance on index: ' . $index;
} else {
    echo "Not found";
}
