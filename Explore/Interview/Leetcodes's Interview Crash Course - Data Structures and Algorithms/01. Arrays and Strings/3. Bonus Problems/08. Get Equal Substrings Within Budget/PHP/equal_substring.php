<?php

function equalSubstring(string $s, string $t, int $maxCost): int
{
    $strlenS = strlen($s);

    $left = 0;
    $cost = 0;
    $answer = 0;
    for ($right = 0; $right < $strlenS; $right++) {
        $cost += abs(ord($s[$right]) - ord($t[$right]));
        while ($cost > $maxCost) {
            $cost -= abs(ord($s[$left]) - ord($t[$left]));
            $left++;
        }

        $answer = max($answer, $right - $left + 1);
    }
    return $answer;
}

