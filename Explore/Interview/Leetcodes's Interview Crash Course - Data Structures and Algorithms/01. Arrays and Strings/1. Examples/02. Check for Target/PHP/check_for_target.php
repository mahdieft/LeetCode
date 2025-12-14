<?php

function checkForTarget(array $numbers, int $target): bool
{
    $leftPointer = 0;
    $rightPointer = count($numbers) - 1;

    while ($leftPointer < $rightPointer) {
        $sum = $numbers[$leftPointer] + $numbers[$rightPointer];
        if ($sum === $target) {
            return true;
        }

        if ($sum < $target) {
            $leftPointer++;
        } else {
            $rightPointer--;
        }
    }
    return false;
}
