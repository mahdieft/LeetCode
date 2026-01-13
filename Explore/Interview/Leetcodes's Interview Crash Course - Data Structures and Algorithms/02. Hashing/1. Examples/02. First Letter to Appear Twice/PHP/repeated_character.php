<?php

function repeatedCharacter(string $s): string
{
    $seenCharacters = [];

    $strlenS = strlen($s);
    for ($i = 0; $i < $strlenS; $i++) {
        if (key_exists($s[$i], $seenCharacters)) {
            return $s[$i];
        }
        $seenCharacters[$s[$i]] = true;
    }

    return '';
}
