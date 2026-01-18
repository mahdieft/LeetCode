<?php

function countElements(array $arr): int
{
    $answer = 0;
    $map = [];

    foreach ($arr as $value) {
        $map[$value] = true;
    }

    foreach ($arr as $value) {
        if (key_exists($value + 1, $map)) {
            $answer++;
        }
    }
    return $answer;
}
