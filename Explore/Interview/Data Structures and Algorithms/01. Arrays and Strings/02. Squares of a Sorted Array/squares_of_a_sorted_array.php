<?php

function sortedSquares(array $nums): array
{
    $count_nums = count($nums);
    $sorted_squares = array_fill(0, $count_nums, 0);

    $left = 0;
    $right = $count_nums - 1;
    $sorted_index = $count_nums - 1;

    while ($left <= $right) {
        if (abs($nums[$left]) < abs($nums[$right])) {
            $sorted_squares[$sorted_index] = $nums[$right] ** 2;
            $right--;
        } else {
            $sorted_squares[$sorted_index] = $nums[$left] ** 2;
            $left++;
        }
        $sorted_index--;
    }

    return $sorted_squares;
}
