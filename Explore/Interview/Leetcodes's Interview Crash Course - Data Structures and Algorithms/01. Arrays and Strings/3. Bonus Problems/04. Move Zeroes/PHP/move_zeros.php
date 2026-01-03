<?php

function moveZeroes(array $nums): array
{
    $countNums = count($nums);

    $writer = 0;
    for ($reader = 0; $reader < $countNums; $reader++) {
        if ($nums[$reader] === 0) {
            continue;
        }
        $nums[$writer] = $nums[$reader];
        $writer++;
    }

    while ($writer < $countNums) {
        $nums[$writer] = 0;
        $writer++;
    }

    return $nums;
}
