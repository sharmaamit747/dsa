<?php

$str = 'madam';
$isPalindrome = true;
$n = 0;

while (isset($str[$n])) {
    $n++;
}

// compare only half
for ($i = 0; $i < $n / 2; $i++) {
    if ($str[$i] != $str[$n - 1 - $i]) {
        $isPalindrome = false;
        break;
    }
}

echo $isPalindrome ? 'Palindrome' : 'Not Palindrome';
