<?php

function maxVowels(string $s, int $k)
{
    $vowels = [
        'a' => true,
        'e' => true,
        'i' => true,
        'o' => true,
        'u' => true,
    ];

    $strlenS = strlen($s);
    $answer = 0;
    for ($i = 0; $i < $k; $i++) {
        if (key_exists($s[$i], $vowels)) {
            $answer++;
        }
    }

    $counter = $answer;

    for ($i = $k; $i < $strlenS; $i++) {
        if (key_exists($s[$i - $k], $vowels)) {
            $counter--;
        }
        if (key_exists($s[$i], $vowels)) {
            $counter++;
        }
        $answer = max($answer, $counter);
    }

    return $answer;
}

echo maxVowels("tryhard", 4);
