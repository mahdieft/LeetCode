<?php

/*
 * Given a sorted array of unique integers and a target integer,
 * return true if there exists a pair of numbers that sum to target,
 * false otherwise.
 */
function has_two_sum(array $numbers, int $target): bool
{
    $left = 0;
    $right = count($numbers) - 1;

    while ($left < $right) {
        $sum = $numbers[$left] + $numbers[$right];
        if ($sum === $target) {
            return true;
        }

        if ($sum < $target) {
            $left++;
        } else {
            $right--;
        }
    }

    return false;
}
