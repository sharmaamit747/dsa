<?php

function heapify(&$arr, $n, $i)
{
    $largest = $i;
    $left = 2 * $i + 1;
    $right = 2 * $i + 2;

    if ($left < $n && $arr[$left] > $arr[$largest]) {
        $largest = $left;
    }

    if ($right < $n && $arr[$right] > $arr[$largest]) {
        $largest = $right;
    }

    if ($largest != $i) {
        $temp = $arr[$i];
        $arr[$i] = $arr[$largest];
        $arr[$largest] = $temp;

        heapify($arr, $n, $largest);
    }
}

function heapSort(&$arr)
{

    // find length
    $n = 0;
    foreach ($arr as $_) {
        $n++;
    }

    // build max heap
    for ($i = (int)($n / 2) - 1; $i >= 0; $i--) {
        heapify($arr, $n, $i);
    }

    // extract elements one by one
    for ($i = $n - 1; $i > 0; $i--) {
        $temp = $arr[0];
        $arr[0] = $arr[$i];
        $arr[$i] = $temp;

        heapify($arr, $i, 0);
    }
}

// test
$arr = [4, 10, 3, 5, 1];
heapSort($arr);

for ($i = 0; isset($arr[$i]); $i++) {
    echo $arr[$i] . " ";
}
