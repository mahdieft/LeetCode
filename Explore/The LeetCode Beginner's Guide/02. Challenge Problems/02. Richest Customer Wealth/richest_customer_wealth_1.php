<?php

class Solution
{

    /**
     * @param Integer[][] $accounts
     * @return Integer
     */
    function maximumWealth(array $accounts): int
    {
        $count = count($accounts);
        $maximum_wealth = array_sum($accounts[0]);

        for ($i = 1; $i < $count; $i++) {
            $maximum_wealth = max($maximum_wealth, array_sum($accounts[$i]));
        }

        return $maximum_wealth;
    }
}
