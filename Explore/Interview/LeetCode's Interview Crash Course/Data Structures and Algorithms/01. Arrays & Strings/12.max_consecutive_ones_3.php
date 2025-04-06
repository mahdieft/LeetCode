<?php

/*
 * Given a binary array nums and an integer k,
 * return the maximum number of consecutive 1's in the array if you can flip at most k 0's.
 */
function longest_ones(array $nums, int $k): int
{
    $answer = 0;
    $count = count($nums);
    $left = $right = 0;
    $current_count = 0;

    while ($right < $count) {
        if ($nums[$right] === 0) {
            $current_count++;
        }

        while ($current_count > $k) {
            if ($nums[$left] === 0) {
                $current_count--;
            }
            $left++;
        }
        $answer = max($answer, $right - $left + 1);
        $right++;
    }
    return $answer;
}
