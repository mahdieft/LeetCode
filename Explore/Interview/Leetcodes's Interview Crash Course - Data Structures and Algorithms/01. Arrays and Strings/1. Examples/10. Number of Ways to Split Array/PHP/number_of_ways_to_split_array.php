<?php

function waysToSplitArray(array $nums): int
{
    $countNums = count($nums);
    for ($i = 1; $i < $countNums; $i++) {
        $nums[$i] += $nums[$i - 1];
    }

    $numberOfWays = 0;
    for ($i = 0; $i < $countNums - 1; $i++) {
        $leftSum = $nums[$i];
        $rightSum = $nums[$countNums - 1] - $nums[$i];
        if ($leftSum >= $rightSum) {
            $numberOfWays++;
        }
    }

    return $numberOfWays;
}
