<?php

$str = 'madamiloveyouaa';
$vowel = 0;
$consonent = 0;
$n = 0;

while (isset($str[$n])) {
    $n++;
}

// compare only half
for ($i = 0; $i < $n; $i++) {
    if ($str[$i] == 'a' || $str[$i] == 'e' || $str[$i] == 'i' || $str[$i] == 'o' || $str[$i] == 'u') {
        $vowel++;
    } else {
        $consonent++;
    }
}

echo 'Vovels = ' . $vowel . ' and Constonent = ' . $consonent;
