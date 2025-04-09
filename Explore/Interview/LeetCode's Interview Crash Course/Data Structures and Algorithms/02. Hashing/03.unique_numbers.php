<?php

/*
 * Given an integer array nums, find all the unique numbers x in nums
 * that satisfy the following: x + 1 is not in nums, and x - 1 is not in nums.
 */
function find_numbers(array $nums): array
{
    $count = count($nums);

    $unique_numbers = [];
    $set_numbers = [];
    for ($i = 0; $i < $count; $i++) {
        $set_numbers[$nums[$i]] = true;
    }

    for ($i = 0; $i < $count; $i++) {
        if (!key_exists($nums[$i] + 1, $set_numbers) && !key_exists($nums[$i] - 1, $set_numbers)) {
            $unique_numbers[] = $nums[$i];
        }
    }

    return $unique_numbers;
}
