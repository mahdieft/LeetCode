<?php

function largestAltitude(array $gain): int
{
    $answer = 0;
    $total = 0;
    foreach ($gain as $altitude) {
        $total += $altitude;
        if ($total > $answer) {
            $answer = $total;
        }
    }

    return $answer;
}
