<?php

$arr = [20, 45, 55, 74, 12, 83, 9];

$len = 0;
$index = -1;
$target = 74;

while (isset($arr[$len])) $len++;

for ($i = 0; $i < $len; $i++) {
    if ($target == $arr[$i]) {
        $index = $i;
        break;
    }
}
if ($index > -1) {
    echo 'element find on position: ' . $index;
} else {
    echo 'element not found';
}

// Logic
// Check each element one by one
// Stop when found
// ⏱ Complexity
// Time: O(n)
// Space: O(1)