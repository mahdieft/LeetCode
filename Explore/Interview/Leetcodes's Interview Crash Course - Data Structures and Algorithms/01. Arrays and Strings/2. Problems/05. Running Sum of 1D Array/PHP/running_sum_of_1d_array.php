<?php

function runningSum(array $nums): array
{
    $countNums = count($nums);

    for ($i = 1; $i < $countNums; $i++) {
        $nums[$i] += $nums[$i - 1];
    }

    return $nums;
}
