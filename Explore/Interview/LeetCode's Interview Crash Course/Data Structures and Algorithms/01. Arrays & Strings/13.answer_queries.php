<?php

/*
 * Given an integer array nums, an array queries where queries[i] = [x, y] and an integer limit,
 * return a boolean array that represents the answer to each query.
 * A query is true if the sum of the subarray from x to y is less than limit, or false otherwise.
 * For example, given nums = [1, 6, 3, 2, 7, 2], queries = [[0, 3], [2, 5], [2, 4]], and limit = 13,
 * the answer is [true, false, true]. For each query, the subarray sums are [12, 14, 12].
 */
function answer_queries(array $nums, array $queries, int $limit)
{
    $count = count($nums);
    $prefix[] = $nums[0];
    for ($i = 1; $i < $count; $i++) {
        $prefix[$i] = $prefix[$i - 1] + $nums[$i];
    }

    $answer = [];
    foreach ($queries as $query) {
        if ($prefix[$query[1]] - $prefix[$query[0]] + $nums[$query[0]] < $limit) {
            $answer[] = true;
        } else {
            $answer[] = false;
        }
    }

    return $answer;
}
