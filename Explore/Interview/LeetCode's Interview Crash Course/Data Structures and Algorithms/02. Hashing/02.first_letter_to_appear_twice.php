<?php

/*
 * Given a string s, return the first character to appear twice.
 * It is guaranteed that the input will have a duplicate character.
 */
function repeated_character(string $s): string
{
    $seen_characters = [];
    $strlen_s = strlen($s);

    for ($i = 0; $i < $strlen_s; $i++) {
        if (key_exists($s[$i], $seen_characters)) {
            return $s[$i];
        }

        $seen_characters[$s[$i]] = true;
    }
}
