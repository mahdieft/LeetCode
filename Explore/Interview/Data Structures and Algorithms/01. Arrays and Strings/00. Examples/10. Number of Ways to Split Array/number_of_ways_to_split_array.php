<?php

function waysToSplitArray(array $nums): int
{
    $count_nums = count($nums);
    $total = array_sum($nums);

    $split_count = 0;
    $current_sum = 0;
    for ($i = 0; $i < $count_nums - 1; $i++) {
        $current_sum += $nums[$i];
        if ($current_sum >= $total - $current_sum) {
            $split_count++;
        }
    }

    return $split_count;
}
