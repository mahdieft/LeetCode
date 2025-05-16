<?php

function numSubarrayProductLessThanK(array $nums, int $k): int
{
    if ($k <= 1) {
        return 0;
    }

    $count_nums = count($nums);
    $left = 0;
    $right = 0;
    $answer = 0;
    $current_product = 1;

    while ($right < $count_nums) {
        $current_product *= $nums[$right];
        while ($current_product >= $k) {
            $current_product /= $nums[$left];
            $left++;
        }
        $answer += $right - $left + 1;
        $right++;
    }

    return $answer;
}
