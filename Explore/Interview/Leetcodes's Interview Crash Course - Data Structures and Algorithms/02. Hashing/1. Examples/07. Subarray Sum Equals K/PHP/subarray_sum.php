<?php

function subarraySum(array $nums, int $k): int
{
    $answer = 0;

    $seen[0] = 1;
    $current = 0;

    foreach ($nums as $num) {
        $current += $num;
        if (key_exists($current - $k, $seen)) {
            $answer += $seen[$current - $k];
        }

        if (!key_exists($current, $seen)) {
            $seen[$current] = 0;
        }
        $seen[$current]++;
    }

    return $answer;
}
