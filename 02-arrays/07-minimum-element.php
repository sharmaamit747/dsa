<?php

$arr = [40, 17, 25, 75, 12, 19];
$min = $arr[0];
foreach ($arr as $val) {
    if ($min > $val) {
        $min = $val;
    }
}
print_r($min);
