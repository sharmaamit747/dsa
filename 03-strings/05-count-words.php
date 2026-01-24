<?php

$str = 'madam i love you';
$word = 1;
$n = 0;

while (isset($str[$n])) {
    $n++;
}

// compare only half
for ($i = 0; $i < $n; $i++) {
    if ($str[$i] == ' ' && isset($str[$i + 1])) {
        $word++;
    }
}

echo $word;
