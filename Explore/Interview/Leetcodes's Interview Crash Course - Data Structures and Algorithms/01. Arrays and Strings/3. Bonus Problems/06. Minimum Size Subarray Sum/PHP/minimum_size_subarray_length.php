<?php

function minSubArrayLen(int $target, array $nums): int
{
    $countNums = count($nums);
    $left = 0;
    $sum = 0;
    $answer = PHP_INT_MAX;
    for ($right = 0; $right < $countNums; $right++) {
        $sum += $nums[$right];

        while ($sum >= $target) {
            $answer = min($answer, $right - $left + 1);
            $sum -= $nums[$left];
            $left++;
        }
    }
    return $answer === PHP_INT_MAX ? 0 : $answer;
}
