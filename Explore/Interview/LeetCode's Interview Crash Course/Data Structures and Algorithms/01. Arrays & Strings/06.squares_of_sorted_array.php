<?php

/*
 * Given an integer array nums sorted in non-decreasing order,
 * return an array of the squares of each number sorted in non-decreasing order.
 */
function sorted_squares(array $nums): array
{
    $count = count($nums);
    $left = 0;
    $right = $count - 1;
    $result = array_fill(0, $count, 0);

    for ($i = $count - 1; $i >= 0; $i--) {
        $left_square = $nums[$left] ** 2;
        $right_square = $nums[$right] ** 2;
        if ($left_square > $right_square) {
            $result[$i] = $left_square;
            $left++;
        } else {
            $result[$i] = $right_square;
            $right--;
        }
    }
    return $result;
}
