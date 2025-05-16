<?php

function minStartValue(array $nums): int
{
    $min = PHP_INT_MAX;
    $sum = 0;
    foreach ($nums as $num) {
        $sum += $num;
        $min = min($min, $sum);
    }

    return $min>= 1 ? 1 : abs(1 - $min);
}
