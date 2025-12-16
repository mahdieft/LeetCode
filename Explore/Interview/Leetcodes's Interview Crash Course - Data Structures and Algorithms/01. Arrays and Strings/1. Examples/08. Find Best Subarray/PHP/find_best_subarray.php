<?php

function findBestSubarray(array $nums, int $k): int
{
    $currentSum = 0;
    for ($i = 0; $i < $k; $i++) {
        $currentSum += $nums[$i];
    }

    $answer = $currentSum;
    $countNums = count($nums);
    for ($i = $k; $i < $countNums; $i++) {
        $currentSum += $nums[$i] - $nums[$i - $k];
        $answer = max($answer, $currentSum);
    }

    return $answer;
}
