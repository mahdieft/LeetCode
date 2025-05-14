<?php

function maximumWealth(array $accounts): int
{
    $max_wealth = PHP_INT_MIN;
    foreach ($accounts as $account) {
        $max_wealth = max(array_sum($account), $max_wealth);
    }

    return $max_wealth;
}
