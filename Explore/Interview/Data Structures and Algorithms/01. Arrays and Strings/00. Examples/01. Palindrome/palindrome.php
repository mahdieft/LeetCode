<?php

function checkIfPalindrome(string $s): bool
{
    if (!$s) {
        return false;
    }

    $left = 0;
    $right = strlen($s) - 1;

    while ($left < $right) {
        if ($s[$left] !== $s[$right]) {
            return false;
        }
        $left++;
        $right--;
    }

    return true;
}
