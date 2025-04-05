<?php

/*
 * Given an integer array nums and an integer k,
 * find the sum of the subarray with the largest sum whose length is k.
 */
function subarray_largest_sum(array $nums, int $k): int
{
    $count = count($nums);
    if ($count < $k) {
        return 0;
    }

    $answer = $current_sum = 0;
    for ($i = 0; $i < $k; $i++) {
        $current_sum += $nums[$i];
    }

    $left = 1;
    $right = $k;
    $answer = $current_sum;
    while ($right < $count) {
        $current_sum += $nums[$right] - $nums[$left];
        $answer = max($answer, $current_sum);
        $right++;
        $left++;
    }
    return $answer;
}

echo subarray_largest_sum([3, -1, 4, 12, -8, 6, 6], 4);
