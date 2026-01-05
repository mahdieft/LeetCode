<?php

function pivotIndex(array $nums): int
{
    $count_nums = count($nums);

    for ($i = 1; $i < $count_nums; $i++) {
        $nums[$i] += $nums[$i - 1];
    }

    $left_sum = 0;
    $right_sum = $nums[$count_nums - 1];
    for ($i = 0; $i < $count_nums; $i++) {
        if ($left_sum == $right_sum - $nums[$i]) {
            return $i;
        }
        $left_sum = $nums[$i];
    }

    return -1;
}
