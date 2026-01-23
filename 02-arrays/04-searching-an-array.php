<?php

$arr = [10, 17, 25, 75, 12, 19];

$found = 12;

$seach = false;

foreach ($arr as $val) {
    if ($val == $found) {
        $seach = true;
        echo $seach;
        break;
    }
}
