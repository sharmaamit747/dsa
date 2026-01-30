<?php

$text = "prggramming";
$pattern = "gram";

$i = 0;
$textLength = 0;
$patternLength = 0;

$found = false;

while (isset($text[$textLength])) $textLength++;
while (isset($pattern[$patternLength])) $patternLength++;

for ($i = 0; $i <= $textLength - $patternLength; $i++) {
    $match = true;
    for ($j = 0; $j < $patternLength; $j++) {
        if ($text[$i + $j] != $pattern[$j]) {
            $match = false;
            break;
        }
    }
    if ($match) {
        echo "Substring found at index $i";
        $found = true;
        break;
    }
}

if (!$found) {
    echo "Substring not found";
}
//“This is the naive substring search. Optimized versions are KMP, Rabin-Karp.”