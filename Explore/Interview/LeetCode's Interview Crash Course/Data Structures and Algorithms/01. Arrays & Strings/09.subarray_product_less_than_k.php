<?php

/*
 * Given an array of positive integers nums and an integer k, return the number of sub-arrays
 * where the product of all the elements in the subarray is strictly less than k.
 * For example, given the input nums = [10, 5, 2, 6], k = 100, the answer is 8.
 * The sub-arrays with products less than k are: [10], [5], [2], [6], [10, 5], [5, 2], [2, 6], [5, 2, 6]
 */
function subarray_product_less_than_k(array $nums, int $k): int
{
    if ($k <= 1) {
        return 0;
    }

    $count = count($nums);
    $answer = 0;
    $current_product = 1;
    for ($left = $right = 0; $right < $count; $right++) {
        $current_product *= $nums[$right];
        while ($current_product >= $k) {
            $current_product /= $nums[$left];
            $left++;
        }
        $answer += $right - $left + 1;
    }

    return $answer;
}
