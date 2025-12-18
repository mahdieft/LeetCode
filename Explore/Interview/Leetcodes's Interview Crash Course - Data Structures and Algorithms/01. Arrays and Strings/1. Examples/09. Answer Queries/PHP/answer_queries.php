<?php

function answerQueries(array $nums, array $queries, int $limit): array
{
    $countNums = count($nums);
    $prefixSum = [$nums[0]];
    for ($i = 1; $i < $countNums; $i++) {
        $prefixSum[] = $nums[$i] + $prefixSum[$i - 1];
    }

    $result = [];
    foreach ($queries as $query) {
        [$leftBound, $rightBound] = $query;
        $sum = $prefixSum[$rightBound] - $prefixSum[$leftBound] + $nums[$leftBound];
        $result[] = $sum < $limit;
    }

    return $result;
}
