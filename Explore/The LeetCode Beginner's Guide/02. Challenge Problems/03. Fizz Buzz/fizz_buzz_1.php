<?php

class Solution
{

    /**
     * @param Integer $n
     * @return String[]
     */
    function fizzBuzz(int $n): array
    {
        $result = [];

        $map = [
            3 => 'Fizz',
            5 => 'Buzz',
        ];

        for ($i = 1; $i <= $n; $i++) {
            $string = '';

            foreach ($map as $key => $value) {
                if ($i % $key === 0) {
                    $string .= $value;
                }
            }

            if (!$string) {
                $string = (string)$i;
            }

            $result[] = $string;
        }

        return $result;
    }
}
