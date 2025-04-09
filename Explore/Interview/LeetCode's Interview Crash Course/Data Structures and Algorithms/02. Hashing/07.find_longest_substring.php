<?php

/*
 * You are given a string s and an integer k. Find the length of the longest substring
 * that contains at most k distinct characters.
 * For example, given s = "eceba" and k = 2, return 3.
 * The longest substring with at most 2 distinct characters is "ece".
 */
function find_longest_substring(string $s, int $k): int
{
    $strlen_s = strlen($s);
    $counts = [];
    $left = $ans = 0;
    for ($right = 0; $right < $strlen_s; $right++) {
        if (!key_exists($s[$right], $counts)) {
            $counts[$s[$right]] = 0;
        }
        $counts[$s[$right]]++;
        while (count($counts) > $k) {
            $counts[$s[$left]]--;
            if ($counts[$s[$left]] === 0) {
                unset($counts[$s[$left]]);
            }
            $left++;
        }
        $ans = max($ans, $right - $left + 1);
    }

    return $ans;
}
