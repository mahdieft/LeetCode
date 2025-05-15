<?php

function reverseString(array $s): array
{
    $left = 0;
    $right = count($s) - 1;

    while ($left < $right) {
        $temp = $s[$left];
        $s[$left] = $s[$right];
        $s[$right] = $temp;
        $left++;
        $right--;
    }

    return $s;
}
