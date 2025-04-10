<?php

/*
 * Given a string s, determine if all characters have the same frequency.
 * For example, given s = "abacbc", return true. All characters appear twice.
 * Given s = "aaabb", return false. "a" appears 3 times, "b" appears 2 times. 3 != 2.
 */
function are_occurrences_equal(string $s): bool
{
    $map = [];

    $strlen = strlen($s);
    $count = 0;
    for ($i = 0; $i < $strlen; $i++) {
        if (!key_exists($s[$i], $map)) {
            $map[$s[$i]] = 0;
        }
        $map[$s[$i]]++;
        $count = max($map[$s[$i]], $count);
    }

    return array_all($map, fn($value) => $value === $count);
}
