<?php

$arr = [20, 45, 55, 74, 12, 83, 9, 55, 78, 83];

$len = 0;
$count = 0;
$target = 83;

while (isset($arr[$len])) $len++;

for ($i = 0; $i < $len; $i++) {
    if ($target == $arr[$i]) {
        $count++;
    }
}
echo $count;
