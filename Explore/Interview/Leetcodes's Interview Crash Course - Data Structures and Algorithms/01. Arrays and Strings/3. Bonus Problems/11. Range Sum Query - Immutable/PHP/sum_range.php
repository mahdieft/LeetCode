<?php

class NumArray
{
    private array $prefixSum;
    private array $nums;

    function __construct(array $nums)
    {
        $this->nums = $nums;
        $this->prefixSum[0] = $nums[0];
        $countNums = count($nums);
        for ($i = 1; $i < $countNums; $i++) {
            $this->prefixSum[$i] = $this->prefixSum[$i - 1] + $nums[$i];
        }
    }

    function sumRange(int $left, int $right): int
    {
        return $this->prefixSum[$right] - $this->prefixSum[$left] + $this->nums[$left];
    }
}
