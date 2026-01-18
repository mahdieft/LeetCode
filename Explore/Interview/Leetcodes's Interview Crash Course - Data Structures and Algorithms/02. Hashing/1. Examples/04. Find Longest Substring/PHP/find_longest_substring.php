<?php

function findLongestSubstring(string $s, int $k): int
{
    $answer = 0;
    $map = [];
    $strlenS = strlen($s);
    $left = 0;
    for ($right = 0; $right < $strlenS; $right++) {
        if (!key_exists($s[$right], $map)) {
            $map[$s[$right]] = 0;
        }
        $map[$s[$right]]++;

        while (count($map) > $k) {
            $map[$s[$left]]--;
            if ($map[$s[$left]] === 0) {
                unset($map[$s[$left]]);
            }
            $left++;
        }

        $answer = max($answer, $right - $left + 1);
    }

    return $answer;
}
