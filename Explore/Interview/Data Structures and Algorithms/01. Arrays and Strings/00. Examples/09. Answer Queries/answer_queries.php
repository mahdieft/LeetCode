<?php

function answerQueries(array $nums, array $queries, int $limit): array
{
    $answer = [];
    $count_nums = count($nums);
    $prefix_sum = [$nums[0]];

    for ($i = 1; $i < $count_nums; $i++) {
        $prefix_sum[$i] = $prefix_sum[$i - 1] + $nums[$i];
    }

    foreach ($queries as $query) {
        $answer[] = $prefix_sum[$query[1]] - $prefix_sum[$query[0]] + $nums[$query[0]] < $limit;
    }
    return $answer;
}
