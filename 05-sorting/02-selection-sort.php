<?php

$arr = [10, 52, 77, 25, 36, 85, 10, 15, 101, 89];

$n = 0;

foreach ($arr as $_) {
    $n++;
}

for ($i = 0; $i < $n - 1; $i++) {
    $minIndex = $i;
    for ($j = $i + 1; $j < $n; $j++) {
        if ($arr[$j] < $arr[$minIndex]) {
            $minIndex = $j;
        }
    }
    if ($minIndex != $i) {
        $temp = $arr[$i];
        $arr[$i] = $arr[$minIndex];
        $arr[$minIndex] = $temp;
    }
}
print_r($arr);
