<?php

/*
 * Given an array of strings strs, group the anagrams together.
 * For example, given strs = ["eat","tea","tan","ate","nat","bat"],
 * return [["bat"],["nat","tan"],["ate","eat","tea"]].
 */
function group_anagrams(array $strings): array
{
    $map = [];
    foreach ($strings as $string) {
        $sorted_string = str_split($string);
        sort($sorted_string);
        $sorted_string = implode($sorted_string);
        if (!key_exists($sorted_string, $map)) {
            $map[$sorted_string] = [];
        }
        $map[$sorted_string][] = $string;
    }

    $answer = [];
    foreach ($map as $group) {
        $answer[] = $group;
    }
    return $answer;
}
