<?php

function missingNumber(array $nums): int
{
    $expectedSum = array_sum(range(1, count($nums)));
    $actualSum = array_sum($nums);
    return $expectedSum - $actualSum;
}
