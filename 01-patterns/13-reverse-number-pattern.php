<?php
$size = 5;

for ($i = 1; $i <= $size; $i++) {
    for ($j = 5; $j >= $i; $j--) {
        echo $j;
    }
    echo "<br>";
}
