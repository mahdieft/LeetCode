<?php

function reverseWords(string $s): string
{
    $strlenS = strlen($s);

    $left = 0;
    for ($i = 0; $i <= $strlenS; $i++) {
        if ($s[$i] !== ' ' && $i < $strlenS) {
            continue;
        }
        $right = $i - 1;
        while ($left < $right) {
            $temp = $s[$left];
            $s[$left] = $s[$right];
            $s[$right] = $temp;
            $left++;
            $right--;
        }
        $left = $i + 1;
    }

    return $s;
}
