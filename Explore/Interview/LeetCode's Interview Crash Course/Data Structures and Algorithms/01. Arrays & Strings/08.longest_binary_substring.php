<?php

/*
 * You are given a binary string s (a string containing only "0" and "1").
 * You may choose up to one "0" and flip it to a "1".
 * What is the length of the longest substring achievable that contains only "1"?
 * For example, given s = "1101100111", the answer is 5. If you perform the flip at index 2,
 * the string becomes 1111100111.
 */
function longest_binary_substring(string $s): int
{
    $answer = 0;
    $strlen_s = strlen($s);
    $left = 0;
    $current_count = 0;

    for ($right = 0; $right < $strlen_s; $right++) {
        if ($s[$right] === '0') {
            $current_count++;
        }

        while ($current_count > 1) {
            if ($s[$left] === '0') {
                $current_count--;
            }
            $left++;
        }
        $answer = max($answer, $right - $left + 1);
    }

    return $answer;
}
