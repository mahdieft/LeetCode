<?php

function minimumStartValue(array $nums)
{
    $min = 0;
    $sum = 0;
    foreach ($nums as $num) {
        $sum += $num;
        $min = min($min, $sum);
    }

    return -$min + 1;
}
