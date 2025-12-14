<?php

function isPalindrome(string $str): bool
{
    $leftPointer = 0;
    $rightPointer = strlen($str) - 1;
    while ($leftPointer < $rightPointer) {
        if ($str[$leftPointer] !== $str[$rightPointer]) {
            return false;
        }
        $leftPointer++;
        $rightPointer--;
    }

    return true;
}
