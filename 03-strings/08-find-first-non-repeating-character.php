<?php

$str = "rdfgaadafgmhr";
$visited = '';

$len = 0;

while (isset($str[$len])) {
    $len++;
}

for ($i = 0; $i < $len; $i++) {
    $found = 0;
    for ($j = 0; $j < $len; $j++) {
        if ($str[$i] == $str[$j]) {
            $found++;
        }
    }
    if ($found == 1) {
        $visited .= $str[$i];
        break;
    }
}

print_r($visited);
