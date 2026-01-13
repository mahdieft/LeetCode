<?php

function checkIfPangram(string $sentence): bool
{
    $hashmap = [];
    $strlenSentence = strlen($sentence);
    for ($i = 0; $i < $strlenSentence; $i++) {
        $hashmap[$sentence[$i]] = true;
    }

    foreach (range('a', 'z') as $letter) {
        if (!key_exists($letter, $hashmap)) {
            return false;
        }
    }

    return true;
}
