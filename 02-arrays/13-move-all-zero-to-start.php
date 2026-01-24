<?php

$arr = [0, 40, 58, 0, 72, 45, 158, 255, 0, 0];

/* Step 1: find length */
$length = 0;
foreach ($arr as $v) {
    $length++;
}

/* Step 2: count zeros */
$zeroCount = 0;
for ($i = 0; $i < $length; $i++) {
    if ($arr[$i] == 0) {
        $zeroCount++;
    }
}

/* Step 3: fill result array */
$result = [];
$index = $zeroCount;

/* Step 4: put non-zero elements after zeros */
for ($i = 0; $i < $length; $i++) {
    if ($arr[$i] != 0) {
        $result[$index] = $arr[$i];
        $index++;
    }
}

/* Step 5: fill zeros at start */
for ($i = 0; $i < $zeroCount; $i++) {
    $result[$i] = 0;
}

print_r($result);
