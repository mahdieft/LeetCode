<?php

function reverseOnlyLetters(string $s): string
{
    $left = 0;
    $right = strlen($s) - 1;

    while ($left < $right) {
        while (!IntlChar::isalpha($s[$left]) && $left < $right) {
            $left++;
        }

        while (!IntlChar::isalpha($s[$right]) && $right > $left) {
            $right--;
        }

        $temp = $s[$left];
        $s[$left] = $s[$right];
        $s[$right] = $temp;

        $left++;
        $right--;
    }

    return $s;
}
