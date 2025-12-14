<?php

function sortedSquares(array $nums): array
{
    $countNums = count($nums);
    $sortedSquares = array_fill(0, $countNums, 0);

    $leftPointer = 0;
    $rightPointer = $countNums - 1;
    while ($leftPointer <= $rightPointer) {
        if (abs($nums[$leftPointer]) < abs($nums[$rightPointer])) {
            $sortedSquares[$countNums - 1] = $nums[$rightPointer] ** 2;
            $rightPointer--;
        } else {
            $sortedSquares[$countNums - 1] = $nums[$leftPointer] ** 2;
            $leftPointer++;
        }
        $countNums--;
    }

    return $sortedSquares;
}
