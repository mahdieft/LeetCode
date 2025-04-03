<?php

/*
 * Given two sorted integer arrays arr1 and arr2,
 * return a new array that combines both of them
 * and is also sorted.
 */
function merge(array $nums_1, array $nums_2): array
{
    $count_1 = count($nums_1);
    $count_2 = count($nums_2);
    $merged = [];

    $i = $j = 0;
    while ($i < $count_1 && $j < $count_2) {
        if ($nums_1[$i] < $nums_2[$j]) {
            $merged[] = $nums_1[$i++];
        } else {
            $merged[] = $nums_2[$j++];
        }
    }

    if ($i < $count_1) {
        $merged[] = $nums_1[$i++];
    }

    if ($j < $count_2) {
        $merged[] = $nums_2[$j++];
    }

    return $merged;
}
