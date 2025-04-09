<?php

/*
 * A pangram is a sentence where every letter of the English alphabet appears at least once.
 * Given a string sentence containing only lowercase English letters, return true if sentence is a pangram, or false otherwise.
 *
 * Example 1:
 * Input: sentence = "thequickbrownfoxjumpsoverthelazydog"
 * Output: true
 * Explanation: sentence contains at least one of every letter of the English alphabet.
 *
 * Example 2:
 * Input: sentence = "leetcode"
 * Output: false
 *
 * Constraints:
 * 1 <= sentence.length <= 1000
 * sentence consists of lowercase English letters.
 */
function is_pangram(string $sentence): bool
{
    $map = [];
    $strlen = strlen($sentence);
    for ($i = 0; $i < $strlen; $i++) {
        if (!key_exists($sentence[$i], $map)) {
            $map[$sentence[$i]] = true;
        }
    }

    return count($map) === 26;
}
