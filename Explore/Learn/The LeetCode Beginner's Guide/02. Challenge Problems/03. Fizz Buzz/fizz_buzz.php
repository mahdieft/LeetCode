<?php

function fizzBuzz(int $n): array
{
    $fizz_buzz_map = [
        3 => 'Fizz',
        5 => 'Buzz',
    ];

    $answer = [];
    for ($i = 1; $i <= $n; $i++) {
        $string = '';
        foreach ($fizz_buzz_map as $key => $value) {
            if ($i % $key === 0) {
                $string .= $value;
            }
        }

        if (!$string) {
            $string = (string)$i;
        }
        $answer[] = $string;
    }

    return $answer;
}
