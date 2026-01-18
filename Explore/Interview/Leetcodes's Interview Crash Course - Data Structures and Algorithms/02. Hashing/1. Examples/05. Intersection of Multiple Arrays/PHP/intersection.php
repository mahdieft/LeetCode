<?php

function intersection(array $nums): array
{
    $answer = [];

    $map = [];
    foreach ($nums as $array) {
        foreach ($array as $num) {
            if (!key_exists($num, $map)) {
                $map[$num] = 0;
            }
            $map[$num]++;
        }
    }

    $countNums = count($nums);
    foreach ($map as $num => $frequency) {
        if ($frequency === $countNums) {
            $answer[] = $num;
        }
    }
    sort($answer);
    return $answer;
}
