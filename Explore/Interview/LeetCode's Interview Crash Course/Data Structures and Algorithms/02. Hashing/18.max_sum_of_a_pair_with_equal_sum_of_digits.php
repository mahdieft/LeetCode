<?php

/*
 * Given an array of integers nums, find the maximum value of nums[i] + nums[j],
 * where nums[i] and nums[j] have the same digit sum (the sum of their individual digits).
 * Return -1 if there is no pair of numbers with the same digit sum.
 */
function maximum_sum(array $nums): int
{
    $sum_map = [];
    $answer = -1;
    foreach ($nums as $num) {
        $sum = 0;
        $temp = $num;
        while ($temp > 0) {
            $sum += $temp % 10;
            $temp /= 10;
        }

        if (key_exists($sum, $sum_map)) {
            $answer = max($answer, $num + $sum_map[$sum]);
        }
        $sum_map[$sum] = max($sum_map[$sum], $num);
    }
    return $answer;
}
