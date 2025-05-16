<?php

function findMaxAverage(array $nums, int $k): float
{
    $count_nums = count($nums);
    $sum = 0;
    $average = 0;

    for ($i = 0; $i < $k; $i++) {
        $sum += $nums[$i];
    }
    $average = $sum / $k;

    for ($i = $k; $i < $count_nums; $i++) {
        $sum += $nums[$i] - $nums[$i - $k];
        $average = max($average, $sum / $k);
    }

    return $average;
}
