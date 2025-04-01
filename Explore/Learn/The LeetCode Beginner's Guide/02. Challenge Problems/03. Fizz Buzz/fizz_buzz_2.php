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

        $fizz_divisibility = 3;
        $fizz_word = 'Fizz';
        
        $buzz_divisibility = 5;
        $buzz_word = 'Buzz';

        for ($i = 1; $i <= $n; $i++) {
            $string = '';

            if ($i % $fizz_divisibility === 0) {
                $string .= $fizz_word;
            }
            if ($i % $buzz_divisibility === 0) {
                $string .= $buzz_word;
            }

            if (!$string) {
                $string = (string)$i;
            }

            $result[] = $string;
        }

        return $result;
    }
}
