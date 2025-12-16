<?php

function subarrayProductLessThanK(array $nums, int $k)
{
    $left = 0;
    $product = 1;
    $answer = 0;

    $countNums = count($nums);
    for ($right = 0; $right < $countNums; $right++) {
        $product *= $nums[$right];

        while ($product >= $k) {
            $product /= $nums[$left];
            $left++;
        }

        $answer += $right - $left + 1;
    }

    return $answer;
}
