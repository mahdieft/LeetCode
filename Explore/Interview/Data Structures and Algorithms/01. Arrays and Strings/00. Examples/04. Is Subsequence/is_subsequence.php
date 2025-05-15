<?php

function isSubsequence(string $s, string $t): bool
{
    $strlen_s = strlen($s);
    $strlen_t = strlen($t);

    $pointer_s = $pointer_t = 0;
    while ($pointer_s < $strlen_s && $pointer_t < $strlen_t) {
        if ($s[$pointer_s] === $t[$pointer_t]) {
            $pointer_s++;
        }
        $pointer_t++;
    }

    return $pointer_s === $strlen_s;
}
