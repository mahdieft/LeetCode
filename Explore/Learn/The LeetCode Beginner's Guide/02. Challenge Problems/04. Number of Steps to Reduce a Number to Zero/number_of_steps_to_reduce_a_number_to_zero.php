<?php

function numberOfSteps(int $num): int
{
    $number_of_steps = 0;

    while ($num > 0) {
        $number_of_steps++;

        if ($num % 2 === 0) {
            $num /= 2;
        } else {
            $num--;
        }
    }

    return $number_of_steps;
}
