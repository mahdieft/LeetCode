<?php

/*
 * Given a binary array nums, return the maximum length of a contiguous subarray with an equal number of 0 and 1.
 *
 * Example 1:
 * Input: nums = [0,1]
 * Output: 2
 * Explanation: [0, 1] is the longest contiguous subarray with an equal number of 0 and 1.
 *
 * Example 2:
 * Input: nums = [0,1,0]
 * Output: 2
 * Explanation: [0, 1] (or [1, 0]) is a longest contiguous subarray with equal number of 0 and 1.
 *
 * Example 3:
 * Input: nums = [0,1,1,1,1,1,0,0,0]
 * Output: 6
 * Explanation: [1,1,1,0,0,0] is the longest contiguous subarray with equal number of 0 and 1.
 *
 * Constraints:
 *      1 <= nums.length <= 10^5
 *      nums[i] is either 0 or 1.
 */
function find_max_length(array $nums)
{
    $map = [0 => -1];
    $maxlen = 0;
    $count = 0;

    for ($i = 0; $i < count($nums); $i++) {
        $count = $count + ($nums[$i] == 1 ? 1 : -1);
        if (key_exists($count, $map)) {
            $maxlen = max($maxlen, $i - $map[$count]);
        } else {
            $map[$count] = $i;
        }
    }
    return $maxlen;
}
