<?php

function findMaxAverage(array $nums, int $k)
{
    $countNums = count($nums);

    $currentSum = 0;
    for ($i = 0; $i < $k; $i++) {
        $currentSum += $nums[$i];
    }
    $maxSum = $currentSum;

    for ($i = $k; $i < $countNums; $i++) {
        $currentSum += $nums[$i] - $nums[$i - $k];
        $maxSum = max($maxSum, $currentSum);
    }

    return $maxSum / $k;
}
