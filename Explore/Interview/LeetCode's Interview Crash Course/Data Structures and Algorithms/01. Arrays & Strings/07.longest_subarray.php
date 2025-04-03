<?php

/*
 * Given an array of positive integers nums and an integer k,
 * find the length of the longest subarray whose sum is less
 * than or equal to k.
 */
function longest_subarray(array $nums, int $k): int
{
    $count = count($nums);
    $answer = 0;

    $current_sum = 0;
    for ($left = 0, $right = 0; $right < $count; $right++) {
        $current_sum += $nums[$right];
        while ($current_sum > $k) {
            $current_sum -= $nums[$left];
            $left++;
        }
        $answer = max($answer, $right - $left + 1);
    }

    return $answer;
}
