<?php

function combine(array $nums_1, array $nums_2): array
{
    $sorted_array = [];

    $count_nums_1 = count($nums_1);
    $count_nums_2 = count($nums_2);

    $pointer_nums_1 = 0;
    $pointer_nums_2 = 0;
    while ($pointer_nums_1 < $count_nums_1 && $pointer_nums_2 < $count_nums_2) {
        if ($nums_1[$pointer_nums_1] < $nums_2[$pointer_nums_2]) {
            $sorted_array[] = $nums_1[$pointer_nums_1];
            $pointer_nums_1++;
        } else {
            $sorted_array[] = $nums_2[$pointer_nums_2];
            $pointer_nums_2++;
        }
    }

    while ($pointer_nums_1 < $count_nums_1) {
        $sorted_array[] = $nums_1[$pointer_nums_1];
        $pointer_nums_1++;
    }

    while ($pointer_nums_2 < $count_nums_2) {
        $sorted_array[] = $nums_1[$pointer_nums_2];
        $pointer_nums_2++;
    }

    return $sorted_array;
}
