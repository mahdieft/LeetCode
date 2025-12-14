<?php

function combineTwoSortedArrays(array $arr1, array $arr2): array
{
    $sorted = [];
    $countArr1 = count($arr1);
    $countArr2 = count($arr2);

    $pointerArr1 = 0;
    $pointerArr2 = 0;
    while ($pointerArr1 < $countArr1 && $pointerArr2 < $countArr2) {
        if ($arr1[$pointerArr1] < $arr2[$pointerArr2]) {
            $sorted[] = $arr1[$pointerArr1];
            $pointerArr1++;
        } else {
            $sorted[] = $arr1[$pointerArr2];
            $pointerArr2++;
        }
    }

    while ($pointerArr1 < $countArr1) {
        $sorted[] = $arr1[$pointerArr1];
        $pointerArr1++;
    }
    while ($pointerArr2 < $countArr2) {
        $sorted[] = $arr1[$pointerArr2];
        $pointerArr2++;
    }

    return $sorted;
}
