<?php

/*
 * Given an array of integers nums and an integer target,
 * return indices of two numbers such that they add up to target.
 * You cannot use the same index twice.
 */
function two_sum(array $nums, int $target): array
{
    $answer = [];
    $count = count($nums);

    for ($i = 0; $i < $count; $i++) {
        $complement = $target - $nums[$i];
        if (key_exists($complement, $answer)) {
            return [$answer[$complement], $i];
        }
        $answer[$nums[$i]] = $i;
    }

    return [];
}
