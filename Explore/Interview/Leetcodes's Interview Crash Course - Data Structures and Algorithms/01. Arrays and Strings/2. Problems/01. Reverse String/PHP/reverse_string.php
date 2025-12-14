<?php

function reverseString(array $s): array
{
    $leftPointer = 0;
    $rightPointer = count($s) - 1;

    while ($leftPointer < $rightPointer) {
        $temp = $s[$leftPointer];
        $s[$leftPointer] = $s[$rightPointer];
        $s[$rightPointer] = $temp;

        $leftPointer++;
        $rightPointer--;
    }

    return $s;
}
