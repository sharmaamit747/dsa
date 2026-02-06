<?php

$arr = [8, 3, 5, 2];

// find length
$n = 0;
foreach ($arr as $_) {
    $n++;
}

// insertion sort
for ($i = 1; $i < $n; $i++) {

    $key = $arr[$i];
    $j = $i - 1;

    // shift elements to the right
    while ($j >= 0 && $arr[$j] > $key) {
        $arr[$j + 1] = $arr[$j];
        $j--;
    }

    // insert key at correct position
    $arr[$j + 1] = $key;
}

// print result
for ($i = 0; $i < $n; $i++) {
    echo $arr[$i] . " ";
}
