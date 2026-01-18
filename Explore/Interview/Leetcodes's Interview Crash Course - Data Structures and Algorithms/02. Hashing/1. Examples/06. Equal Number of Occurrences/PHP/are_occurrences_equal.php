<?php

function areOccurrencesEqual(string $s): bool
{
    $frequency_map = array_count_values(str_split($s));

    $count_map = [];
    foreach ($frequency_map as $count) {
        $count_map[$count] = true;
    }

    return count($count_map) === 1;
}
