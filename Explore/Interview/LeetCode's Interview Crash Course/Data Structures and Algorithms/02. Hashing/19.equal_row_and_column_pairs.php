<?php

/*
 * Given an n x n matrix grid, return the number of pairs (R, C)
 * where R is a row and C is a column, and R and C are equal if we consider them as 1D arrays.
 */
function equal_pairs(array $nums): int
{
    $row_map = [];
    $col_map = [];

    foreach ($nums as $row) {
        $key = implode($row);
        if (!key_exists($key, $row_map)) {
            $row_map[$key] = 0;
        }
        $row_map[$key]++;
    }

    $row_count = count($nums);
    $col_count = count($nums[0]);
    for ($i = 0; $i < $row_count; $i++) {
        $col = [];
        for ($j = 0; $j < $col_count; $j++) {
            $col[] = $nums[$j][$i];
        }
        $key = implode($col);
        if (!key_exists($key, $col_map)) {
            $col_map[$key] = 0;
        }
        $col_map[$key]++;
    }

    $answer = 0;
    foreach ($row_map as $key => $value) {
        if (key_exists($key, $col_map))
            $answer += $value * $col_map[$key];
    }

    return $answer;
}
