<?php

$str = 'AMIT KUMAR';
$revStr = '';
$i = 0;

while (isset($str[$i])) {
    $i++;
}

for ($j = $i - 1; $j >= 0; $j--) {
    $revStr .= $str[$j];
}

echo $revStr;
