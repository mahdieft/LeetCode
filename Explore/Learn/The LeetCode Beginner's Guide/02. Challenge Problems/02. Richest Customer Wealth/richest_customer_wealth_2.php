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
        $number_of_accounts = count($accounts[0]);
        $maximum_wealth = 0;

        for ($i = 0; $i < $count; $i++) {
            $customer_wealth = 0;
            for ($j = 0; $j < $number_of_accounts; $j++) {
                $customer_wealth += $accounts[$i][$j];
            }

            if ($customer_wealth > $maximum_wealth) {
                $maximum_wealth = $customer_wealth;
            }
        }

        return $maximum_wealth;
    }
}
