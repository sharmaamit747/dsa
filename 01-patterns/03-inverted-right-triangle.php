<?php
$row = 5;

for ($i = 1; $i <= $row; $i++) {
    for ($j = $row; $j >= $i; $j--) {
        echo '* ';
    }
    echo '<br>';
}
