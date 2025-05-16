<?php

class Solution
{
    function runningSum(array $nums): array
    {
        $count_nums = count($nums);
        for ($i = 1; $i < $count_nums; $i++) {
            $nums[$i] += $nums[$i - 1];
        }

        return $nums;
    }
}
