<?php

function findLength(array $nums, int $k): int
{
    $left = 0;
    $currentSum = 0;
    $answer = 0;

    $countNums = count($nums);
    for ($right = 0; $right < $countNums; $right++) {
        $currentSum += $nums[$right];

        while ($currentSum > $k) {
            $currentSum -= $nums[$left];
            $left++;
        }

        $answer = max($answer, $right - $left + 1);
    }

    return $answer;
}
