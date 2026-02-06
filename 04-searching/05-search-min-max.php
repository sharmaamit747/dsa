<?php

$arr = [20, 45, 55, 74, 12, 83, 9, 55, 20, 78, 83];
$min = $arr[0];
$max = $arr[0];

for ($i = 0; $i < 10; $i++) {
    if ($arr[$i] > $min) {
        $max = $arr[$i];
    }
}
echo $min . '-' . $max; 
