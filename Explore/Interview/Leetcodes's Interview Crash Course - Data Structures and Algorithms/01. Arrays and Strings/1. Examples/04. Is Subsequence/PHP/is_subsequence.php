<?php

function isSubsequence(string $s, string $t): bool
{
    $strlenS = strlen($s);
    $strlenT = strlen($t);

    $pointerS = 0;
    $pointerT = 0;
    while ($pointerS < $strlenS && $pointerT < $strlenT) {
        if ($s[$pointerS] === $t[$pointerT]) {
            $pointerS++;
        }
        $pointerT++;
    }

    return $pointerS === $strlenS;
}
