<?php

function quickSort($arr, $low, $high)
{
    if ($low < $high) {
        $pi = partition($arr, $low, $high);

        $arr = quickSort($arr, $low, $pi - 1);
        $arr = quickSort($arr, $pi + 1, $high);
    }
    return $arr;
}

function partition($arr, $low, $high)
{
    $pivot = $arr[$high];
    $i = $low - 1;

    for ($j = $low; $j < $high; $j++) {
        if ($arr[$j] < $pivot) {
            $i++;
            $temp = $arr[$i];
            $arr[$i] = $arr[$j];
            $arr[$j] = $temp;
        }
    }

    $temp = $arr[$i + 1];
    $arr[$i + 1] = $arr[$high];
    $arr[$high] = $temp;

    return $i + 1;
}

// test
$arr = [6, 3, 9, 5, 2];
$n = 0;
foreach ($arr as $_) $n++;

$sorted = quickSort($arr, 0, $n - 1);
print_r($sorted);
