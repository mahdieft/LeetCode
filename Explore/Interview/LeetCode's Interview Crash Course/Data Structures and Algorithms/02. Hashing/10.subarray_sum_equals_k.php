<?php

/*
 * Given an integer array nums and an integer k,
 * find the number of subarrays whose sum is equal to k
 */
function subarray_sum(array $nums, int $k): int
{
    $counts = [];
    $counts[0] = 1;
    $ans = $curr = 0;

    foreach ($nums as $num) {
        $curr += $num;
        $ans += $counts[$curr - $k];
        $counts[$curr] += 1;
    }
    return $ans;
}
