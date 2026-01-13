<?php

function missingNumber(array $nums): int
{
    $seenNumbers = [];
    foreach ($nums as $num) {
        $seenNumbers[$num] = true;
    }

    $countNums = count($nums);
    for ($i = 0; $i <= $countNums; $i++) {
        if (!key_exists($i, $seenNumbers)) {
            return $i;
        }
    }

    return -1;
}
