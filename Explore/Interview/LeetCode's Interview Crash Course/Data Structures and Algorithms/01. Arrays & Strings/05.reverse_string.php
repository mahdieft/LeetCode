<?php

/*
 * Write a function that reverses a string. The input string is given
 * as an array of characters s.You must do this by modifying the input
 * array in-place with O(1) extra memory.
 */
function reverse_string(array $string): array {
    $left = 0;
    $right = count($string) - 1;

    while ($left < $right) {
        $temp = $string[$left];
        $string[$left] = $string[$right];
        $string[$right] = $temp;
        $left++;
        $right--;
    }
    return $string;
}
