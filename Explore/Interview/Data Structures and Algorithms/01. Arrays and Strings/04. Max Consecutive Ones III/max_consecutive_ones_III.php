<?php

function longestOnes(array $nums, int $k): int
{
    $count_nums = count($nums);
    $answer = 0;
    $flip_count = 0;
    $left = $right = 0;

    while ($right < $count_nums) {
        if ($nums[$right] === 0) {
            $flip_count++;
        }

        while ($flip_count > $k) {
            if ($nums[$left] === 0) {
                $flip_count--;
            }
            $left++;
        }

        $answer = max($answer, $right - $left + 1);
        $right++;
    }

    return $answer;
}
