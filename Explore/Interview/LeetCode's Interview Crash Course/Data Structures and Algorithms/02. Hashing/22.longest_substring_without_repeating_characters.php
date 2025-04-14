<?php

/*
 * Given a string s, find the length of the longest substring without duplicate characters.
 *
 * Example 1:
 * Input: s = "abcabcbb"
 * Output: 3
 * Explanation: The answer is "abc", with the length of 3.
 *
 * Example 2:
 * Input: s = "bbbbb"
 * Output: 1
 * Explanation: The answer is "b", with the length of 1.
 *
 * Example 3:
 * Input: s = "pwwkew"
 * Output: 3
 * Explanation: The answer is "wke", with the length of 3.
 * Notice that the answer must be a substring, "pwke" is a subsequence and not a substring.
 *
 * Constraints:
 *      0 <= s.length <= 5 * 10^4
 *      s consists of English letters, digits, symbols and spaces.
 */
function length_of_longest_substring(string $s): int
{
    $answer = 0;

    $strlen_s = strlen($s);
    $seen_letters = [];
    for ($left = $right = 0; $right < $strlen_s; $right++) {
        if (key_exists($s[$right], $seen_letters)) {
            while ($seen_letters[$s[$right]] > 0) {
                $seen_letters[$s[$left]]--;
                $left++;
            }
        }
        $seen_letters[$s[$right]] = 1;
        $answer = max($answer, $right - $left + 1);
    }

    return $answer;
}
