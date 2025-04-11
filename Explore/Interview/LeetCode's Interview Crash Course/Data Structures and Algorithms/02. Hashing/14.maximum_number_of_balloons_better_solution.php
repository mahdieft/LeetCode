<?php

/*
 * Given a string text, you want to use the characters of text to form as many instances of the word "balloon" as possible.
 * You can use each character in text at most once. Return the maximum number of instances that can be formed.
 */
function max_number_of_balloons(string $text): int
{
    $frequency_map = [];
    $strlen = strlen($text);
    for ($i = 0; $i < $strlen; $i++) {
        if (!key_exists($text[$i], $frequency_map)) {
            $frequency_map[$text[$i]] = 0;
        }
        $frequency_map[$text[$i]]++;
    }

    $balloon_map = ['b' => 1, 'a' => 1, 'l' => 2, 'o' => 2, 'n' => 1];
    $answer = [];
    foreach ($balloon_map as $character => $frequency) {
        if (!key_exists($character, $frequency_map)) {
            return 0;
        }
        $answer[] = (int)($frequency_map[$character] / $frequency);
    }

    return min(...$answer);
}
