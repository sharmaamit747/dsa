<?php
//(Sorted array + Divide & Conquer)

$arr = [10, 20, 30, 40, 50, 60, 70];
$target = 70;

$min = 0;
$max = 6;

$findIndex = -1;

while ($min <= $max) {
    $mid = (int)(($min + $max) / 2);
    if ($arr[$mid] === $target) {
        $findIndex = $mid;
        break;
    } else if ($arr[$mid] > $target) {
        $max = $mid - 1;
    } else {
        $min = $mid + 1;
    }
}

echo $findIndex != -1 ? "Found at index $findIndex" : "Not Found";

//⏱ Time & Space

//Time: O(log n)

//Space: O(1)
