<?php

function canConstruct(string $ransomNote, string $magazine)
{
    $magazine_map = array_count_values(str_split($magazine));
    $ransomNote_map = array_count_values(str_split($ransomNote));

    foreach ($ransomNote_map as $letter => $frequency) {
        if (!key_exists($letter, $magazine_map) || $magazine_map[$letter] < $frequency) {
            return false;
        }
    }

    return true;
}
