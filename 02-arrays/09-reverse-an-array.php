<?php

$arr = [40, 17, 25, 75, 12, 19];
$i = 0;
foreach ($arr as $val) {
    $i++;
}
$left = 0;
$right = $i - 1;
while ($left < $right) {
    $temp = $arr[$left];
    $arr[$left] = $arr[$right];
    $arr[$right] = $temp;
    $left++;
    $right--;
}
print_r($arr);
