<?php

/*
 * Given an array of positive integers nums and an integer k.
 * Find the number of subarrays with exactly k odd numbers in them.
 * For example, given nums = [1, 1, 2, 1, 1], k = 3, the answer is 2.
 * The subarrays with 3 odd numbers in them are [1, 1, 2, 1, 1] and [1, 1, 2, 1, 1].
 */
function number_of_subarrays(array $nums, int $k): int
{
    $counts = [];
    $counts[0] = 1;
    $ans = $curr = 0;

    foreach ($nums as $num) {
        $curr += $num % 2;
        $ans += $counts[$curr - $k];
        $counts[$curr] += 1;
    }
    return $ans;
}
