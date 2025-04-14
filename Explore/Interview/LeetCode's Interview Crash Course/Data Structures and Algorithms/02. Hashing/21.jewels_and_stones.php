<?php

/*
 * You're given strings jewels representing the types of stones that are jewels,
 * and stones representing the stones you have. Each character in stones is a type
 * of stone you have. You want to know how many of the stones you have are also jewels.
 * Letters are case sensitive, so "a" is considered a different type of stone from "A".
 *
 * Example 1:
 * Input: jewels = "aA", stones = "aAAbbbb"
 * Output: 3
 *
 * Example 2:
 * Input: jewels = "z", stones = "ZZ"
 * Output: 0
 *
 * Constraints:
 *      1 <= jewels.length, stones.length <= 50
 *      jewels and stones consist of only English letters.
 *      All the characters of jewels are unique.
 */
function num_jewels_in_stones(string $jewels, string $stones): int
{
    $answer = 0;
    $jewels_map = [];
    foreach (str_split($jewels) as $jewel) {
        if (!key_exists($jewel, $jewels_map)) {
            $jewels_map[$jewel] = true;
        }
    }

    $strlen_stones = strlen($stones);
    for ($i = 0; $i < $strlen_stones; $i++) {
        if (key_exists($stones[$i], $jewels_map)) {
            $answer++;
        }
    }

    return $answer;
}
