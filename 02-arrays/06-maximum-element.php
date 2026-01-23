<?php

$arr = [10, 17, 25, 75, 12, 19];
$max = $arr[0];
foreach ($arr as $val) {
    if ($max < $val) {
        $max = $val;
    }
}
print_r($max);
