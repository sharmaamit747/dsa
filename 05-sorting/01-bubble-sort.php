<?php

$arr = [10, 52, 77, 25, 36, 85, 10, 15, 101, 89];

$n = 0;

foreach ($arr as $_) {
    $n++;
}

for ($i = 0; $i < $n - 1; $i++) {
    for ($j = 0; $j < $n - $i - 1; $j++) {
        if ($arr[$j] > $arr[$j + 1]) {
            $temp = $arr[$j + 1];
            $arr[$j + 1] = $arr[$j];
            $arr[$j] = $temp;
        }
    }
}

print_r($arr);
