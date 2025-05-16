<?php

function findBestSubarray(array $nums, int $k): int
{
    $count_nums = count($nums);
    if ($count_nums < $k) {
        return 0;
    }
    $answer = 0;
    for ($i = 0; $i < $k; $i++) {
        $answer += $nums[$i];
    }

    $current_sum = $answer;
    for ($i = $k; $i < $count_nums; $i++) {
        $current_sum += $nums[$i] - $nums[$i - $k];
        $answer = max($answer, $current_sum);
    }

    return $answer;
}

echo findBestSubarray([3, -1, 4, 12, -8, 5, 6], 4) . "\n";
