<?php

/*
 * Given a string s, return true if it is a palindrome, false otherwise.
 */
function is_palindrome(string $string): bool
{
    $left = 0;
    $right = strlen($string) - 1;

    while ($left < $right) {
        if ($string[$left] !== $string[$right]) {
            return false;
        }
        $left++;
        $right--;
    }
    return true;
}
