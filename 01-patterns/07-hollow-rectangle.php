<?php

$row = 3;
$col = 5;

for ($i = 1; $i <= $row; $i++) {
    for ($j = 1; $j <= $col; $j++) {
        if ($i != 2 || ($j == 1 || $j == $col)) {
            echo '*';
        } else {
            echo ' ';
        }
    }
    echo '<br>';
}
