<?php

$str = "aabbc";
$visited = [];

$i = 0;
while (isset($str[$i])) {

    if (isset($visited[$i])) {
        $i++;
        continue;
    }

    $count = 1;

    for ($j = $i + 1; isset($str[$j]); $j++) {
        if ($str[$i] == $str[$j]) {
            $count++;
            $visited[$j] = true;
        }
    }

    echo $str[$i] . " => " . $count . "<br>";
    $i++;
}
