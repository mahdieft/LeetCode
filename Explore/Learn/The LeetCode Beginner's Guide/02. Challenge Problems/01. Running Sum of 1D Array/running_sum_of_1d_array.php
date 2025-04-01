<?php

class Solution
{

    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function runningSum(array $nums): array
    {
        $count = count($nums);

        for ($i = 1; $i < $count; $i++) {
            $nums[$i] += $nums[$i - 1];
        }

        return $nums;
    }
}
