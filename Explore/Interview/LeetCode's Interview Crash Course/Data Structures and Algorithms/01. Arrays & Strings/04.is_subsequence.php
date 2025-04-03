<?php

/*
 * Given two strings s and t, return true if s is a subsequence of t, or false otherwise.
 * A subsequence of a string is a sequence of characters that can be obtained by deleting
 * some (or none) of the characters from the original string, while maintaining the relative
 * order of the remaining characters. For example, "ace" is a subsequence of "abcde" while "aec" is not.
 */
function is_subsequence(string $s, string $t): bool
{
    $length_s = strlen($s);
    $length_t = strlen($t);

    if ($length_s > $length_t) {
        return false;
    }

    $pointer_s = $pointer_t = 0;
    while ($pointer_s < $length_s && $pointer_t < $length_t) {
        if ($s[$pointer_s] === $t[$pointer_t]) {
            $pointer_s++;
        }
        $pointer_t++;
    }

    return $pointer_s === $length_s;
}
