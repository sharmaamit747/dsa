<?php

$row = 5;

for ($i = 1; $i <= $row; $i++) {
    // Spaces
    for ($s = $row - $i; $s > 0; $s--) {
        echo '&nbsp;&nbsp;';
    }
    // Stars
    for ($j = 1; $j <= (2 * $i - 1); $j++) {
        echo '*';
    }
    echo '<br>';
}
