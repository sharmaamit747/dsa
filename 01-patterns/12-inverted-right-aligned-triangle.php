<?php

$row = 5;

for ($i = 1; $i <= $row; $i++) {
    // spaces
    for ($j = 1; $j <= $row - $i; $j++) {
        echo ' ';
    }
    // stars
    for ($j = 1; $j <= $i; $j++) {
        echo '*';
    }
    echo '<br/>';
}
