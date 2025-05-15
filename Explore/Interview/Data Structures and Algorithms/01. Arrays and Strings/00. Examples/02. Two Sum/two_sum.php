<?php

function checkForTarget(array $numbers, int $target): bool
{
    $left = 0;
    $right = count($numbers) - 1;
    while ($left < $right) {
        $sum = $numbers[$left] + $numbers[$right];
        if ($sum === $target) {
            return true;
        }
        if ($sum < $target) {
            $left++;
        } else {
            $right--;
        }
    }
    return false;
}
