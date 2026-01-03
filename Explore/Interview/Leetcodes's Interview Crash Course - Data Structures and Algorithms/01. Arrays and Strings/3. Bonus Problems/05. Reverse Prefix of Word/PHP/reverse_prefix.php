<?php

function reversePrefix(string $word, string $ch): string
{
    $strlenWord = strlen($word);

    for ($i = 0; $i < $strlenWord; $i++) {
        if ($word[$i] === $ch) {
            $left = 0;
            while ($left < $i) {
                $temp = $word[$left];
                $word[$left] = $word[$i];
                $word[$i] = $temp;
                $left++;
                $i--;
            }
            break;
        }
    }
    return $word;
}
