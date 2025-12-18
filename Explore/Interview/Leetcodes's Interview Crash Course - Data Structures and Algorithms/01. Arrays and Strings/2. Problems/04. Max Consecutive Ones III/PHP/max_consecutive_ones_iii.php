<?php

function longestOnes(array $nums, int $k)
{
    $countNums = count($nums);

    $longestOnes = 0;
    $left = 0;
    $flipCount = 0;
    for ($right = 0; $right < $countNums; $right++) {
        if ($nums[$right] === 0) {
            $flipCount++;
        }

        while ($flipCount > $k) {
            if ($nums[$left] === 0) {
                $flipCount--;
            }
            $left++;
        }

        $longestOnes = max($longestOnes, $right - $left + 1);
    }

    return $longestOnes;
}
