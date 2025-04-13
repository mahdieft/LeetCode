<?php

/*
 * Given an integer array cards, find the length of the shortest subarray that contains at least one duplicate.
 * If the array has no duplicates, return -1.
 */
function minimum_card_pickup(array $cards): int
{
    $count = count($cards);

    $map = [];
    for ($i = 0; $i < $count; $i++) {
        $map[$cards[$i]][] = $i;
    }

    $answer = PHP_INT_MAX;
    foreach ($map as $key => $indexes) {
        $count = count($indexes);
        for ($i = 0; $i < $count - 1; $i++) {
            $answer = min($answer, $indexes[$i + 1] - $indexes[$i] + 1);
        }
    }

    return $answer === PHP_INT_MAX ? -1 : $answer;
}
