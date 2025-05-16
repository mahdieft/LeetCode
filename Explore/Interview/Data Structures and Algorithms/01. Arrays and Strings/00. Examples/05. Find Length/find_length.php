<?php

function findLength(array $nums, int $k): int
{
    $count_nums = count($nums);
    $current_sum = 0;
    $left = 0;
    $right = 0;
    $max_length = 0;

    while ($right < $count_nums) {
        $current_sum += $nums[$right];
        while ($current_sum > $k) {
            $current_sum -= $nums[$left];
            $left++;
        }

        $max_length = max($max_length, $right - $left + 1);
        $right++;
    }

    return $max_length;
}
