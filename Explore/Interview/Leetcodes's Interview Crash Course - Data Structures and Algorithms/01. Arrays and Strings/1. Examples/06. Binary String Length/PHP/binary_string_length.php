<?php

function binaryStringLength(string $s)
{
    $strlenS = strlen($s);

    $left = 0;
    $flipCount = 0;
    $answer = 0;
    for ($right = 0; $right < $strlenS; $right++) {
        if ($s[$right] === '0') {
            $flipCount++;
        }

        while ($flipCount > 1) {
            if ($s[$left] === '0') {
                $flipCount--;
            }
            $left++;
        }

        $answer = max($answer, $right - $left + 1);
    }

    return $answer;
}
