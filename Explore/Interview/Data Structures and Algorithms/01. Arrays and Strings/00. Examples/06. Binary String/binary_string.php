<?php

function findLength(string $s): int
{
    define('MAX_FLIP', 1);

    $strlen_s = strlen($s);
    $flip_count = 0;
    $left = 0;
    $right = 0;
    $answer = 0;

    while ($right < $strlen_s) {
        if ($s[$right] === '0') {
            $flip_count++;
        }

        while ($flip_count > MAX_FLIP) {
            if ($s[$left] === '0') {
                $flip_count--;
            }
            $left++;
        }
        $answer = max($answer, $right - $left + 1);
        $right++;
    }

    return $answer;
}
