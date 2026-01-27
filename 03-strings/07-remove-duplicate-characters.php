<?php

$str = "raam";
$visited = '';

$len = 0;

while (isset($str[$len])) {
    $len++;
}

for ($i = 0; $i < $len; $i++) {
    $found = false;
    for ($j = 0; $j < $i; $j++) {
        if ($str[$i] == $str[$j]) {
            $found = true;
            break;
        }
    }

    if (!$found) {
        $visited .= $str[$i];
    }
}

print_r($visited);
