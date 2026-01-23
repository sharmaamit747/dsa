<?php

$row = 5;

for ($i = 65; $i <= 65 + $row - 1; $i++) {
    for ($j = 65; $j <= $i; $j++) {
        echo chr($j);
    }
    echo '<br>';
}
