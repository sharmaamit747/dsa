<?php
$s1 = "listen";
$s2 = "silent";

/* find lengths */
$l1 = $l2 = 0;
while (isset($s1[$l1])) $l1++;
while (isset($s2[$l2])) $l2++;

if ($l1 != $l2) {
    echo "Not Anagram";
    exit;
}

$visited = [];

for ($i = 0; $i < $l1; $i++) {
    $found = false;

    for ($j = 0; $j < $l2; $j++) {
        if ($s1[$i] == $s2[$j] && !isset($visited[$j])) {
            $visited[$j] = true;
            $found = true;
            break;
        }
    }

    if (!$found) {
        echo "Not Anagram";
        exit;
    }
}

echo "Anagram";
