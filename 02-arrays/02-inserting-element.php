<?php

$arr = [10, 17, 25, 75, 12, 19];

$arr[] = 50;

// Using function
array_push($arr, 58);

foreach ($arr as $val) {
    echo $val . '<br>';
}
