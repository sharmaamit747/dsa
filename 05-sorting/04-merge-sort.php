<?php
function mergeSort($arr, $n)
{
    if ($n <= 1) {
        return $arr;
    }
    $mid = (int)($n / 2);

    // Left Side
    $left = [];
    for ($i = 0; $i < $mid; $i++) {
        $left[] = $arr[$i];
    }
    // Right Side
    $right = [];
    for ($j = $mid; $j < $n; $j++) {
        $right[] = $arr[$j];
    }
    $left = mergeSort($left, $mid);
    $right = mergeSort($right, $n - $mid);

    return merge($left, $right);
}

function merge($left, $right)
{
    $result = [];
    $i = $j = 0;

    // find lengths manually
    $n1 = 0;
    foreach ($left as $_) $n1++;

    $n2 = 0;
    foreach ($right as $_) $n2++;

    while ($i < $n1 && $j < $n2) {
        if ($left[$i] <= $right[$j]) {
            $result[] = $left[$i++];
        } else {
            $result[] = $right[$j++];
        }
    }

    while ($i < $n1) {
        $result[] = $left[$i++];
    }

    while ($j < $n2) {
        $result[] = $right[$j++];
    }

    return $result;
}

$arr = [20, 5, 53, 25, 5, 12, 85, 32, 12, 5, 78, 99, 105, 2, 55];
$n = 0;
while (isset($arr[$n])) $n++;
$sort = mergeSort($arr, $n);
print_r($sort);
