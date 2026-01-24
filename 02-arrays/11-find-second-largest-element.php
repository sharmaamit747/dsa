<?php

$arr = [40, 112, 25, 175, 12, 19, 25, 98];
$length = 0;

foreach ($arr as $val) {
    $length++;
}

$largest = -9999;
$second = -9999;
for ($i = 0; $i < $length; $i++) {
    if ($arr[$i] > $largest) {
        $second = $largest;
        $largest = $arr[$i];
    } else if ($arr[$i] > $second && $largest != $second) {
        $second = $arr[$i];
    }
}
print_r($second);
