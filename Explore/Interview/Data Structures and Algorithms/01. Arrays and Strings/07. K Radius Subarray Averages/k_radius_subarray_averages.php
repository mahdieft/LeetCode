<?php

function getAverages(array $nums, int $k): array
{
    $count = count($nums);
    $answer = array_fill(0, $count, -1);

    if ($k === 0) {
        return $nums;
    }

    if ($count <= $k) {
        return $answer;
    }

    for ($i = 1; $i < $count; $i++) {
        $nums[$i] += $nums[$i - 1];
    }

    for ($i = $k; $i < $count - $k; $i++) {
        if ($i === $k) {
            $answer[$i] = $nums[$i + $k];
        } else {
            $answer[$i] = $nums[$i + $k] - $nums[$i - $k - 1];
        }

        $answer[$i] = (int)($answer[$i] / ($k * 2 + 1));
    }
    return $answer;
}
