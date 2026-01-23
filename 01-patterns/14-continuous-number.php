<?php
$size = 5;
$z = 1;
for ($i = 1; $i <= $size; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo $z;
        $z++;
    }
    echo "<br>";
}
