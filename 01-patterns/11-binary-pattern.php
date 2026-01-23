<?php

$row = 5;

for ($i = 1; $i <= $row; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo (($i + $j) % 2 === 0) ? '1' : '0';
    }
    echo '<br>';
}
