<?php

/*
 * Given two strings ransomNote and magazine, return true if ransomNote can be constructed
 * by using the letters from magazine and false otherwise. Each letter in magazine can only be used once in ransomNote.
 *
 * Example 1:
 * Input: ransomNote = "a", magazine = "b"
 * Output: false
 *
 * Example 2:
 * Input: ransomNote = "aa", magazine = "ab"
 * Output: false
 *
 * Example 3:
 * Input: ransomNote = "aa", magazine = "aab"
 * Output: true
 *
 * Constraints:
 *      1 <= ransomNote.length, magazine.length <= 10^5
 *      ransomNote and magazine consist of lowercase English letters.
 */
function can_construct(string $ransomNote, string $magazine): bool
{
    $dictionary = [];
    $magazine_length = strlen($magazine);
    for ($i = 0; $i < $magazine_length; $i++) {
        if (!isset($dictionary[$magazine[$i]])) {
            $dictionary[$magazine[$i]] = 0;
        }
        $dictionary[$magazine[$i]]++;
    }

    $ransomNote_length = strlen($ransomNote);
    for ($i = 0; $i < $ransomNote_length; $i++) {
        if (!key_exists($ransomNote[$i], $dictionary) || $dictionary[$ransomNote[$i]] === 0) {
            return false;
        }
        $dictionary[$ransomNote[$i]]--;
    }

    return true;
}
