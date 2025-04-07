<?php

/*
 * Given an integer array nums, find the number of ways to split the array into two parts
 * so that the first section has a sum greater than or equal to the sum of the second section.
 * The second section should have at least one number.
 */
function ways_to_split_an_array(array $nums): int
{
    $answer = 0;

    $left_sum = 0;
    $right_sum = array_sum($nums);

    $count = count($nums);
    for ($i = 0; $i < $count - 1; $i++) {
        $left_sum += $nums[$i];
        $right_sum -= $nums[$i];
        echo $left_sum . "\t" . $right_sum . "\n";

        if ($left_sum >= $right_sum) {
            $answer++;
        }
    }

    return $answer;
}
