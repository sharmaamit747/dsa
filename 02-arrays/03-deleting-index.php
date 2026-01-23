<?php

$arr = [10, 17, 25, 75, 12, 19];

unset($arr[3]);
foreach ($arr as $val) {
    echo $val . '<br>';
}
