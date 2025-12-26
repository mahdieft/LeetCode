<?php

function getAverages(array $nums, int $k): array
{
    if ($k === 0) {
        return $nums;
    }

    $countNums = count($nums);
    if ($countNums < $k) {
        return array_fill(0, $countNums - 1, -1);
    }

    $answer = [];

    $prefixSum = [$nums[0]];
    for ($i = 1; $i < $countNums; $i++) {
        $prefixSum[$i] = $prefixSum[$i - 1] + $nums[$i];
    }

    $divisor = 2 * $k + 1;
    for ($i = 0; $i < $countNums; $i++) {
        if ($i < $k || $countNums - $i <= $k) {
            $answer[] = -1;
            continue;
        }

        $sum = $prefixSum[$i + $k] - $prefixSum[$i - $k] + $nums[$i - $k];
        $answer[] = (int)($sum / $divisor);
    }

    return $answer;
}
