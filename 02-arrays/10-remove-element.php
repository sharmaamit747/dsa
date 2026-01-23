<?php

$arr = [40, 12, 25, 75, 12, 19, 25, 98];
$length = 0;

foreach ($arr as $val) {
    $length++;
}
$result = [];
for ($i = 0; $i < $length; $i++) {
    $duplicate = false;
    $lengthResult = 0;

    foreach ($result as $val2) {
        $lengthResult++;
    }
    for ($j = 0; $j < $lengthResult; $j++) {
        if ($arr[$i] == $result[$j]) {
            $duplicate = true;
            break;
        }
    }
    if (!$duplicate) {
        $result[] = $arr[$i];
    }
}
print_r($result);
