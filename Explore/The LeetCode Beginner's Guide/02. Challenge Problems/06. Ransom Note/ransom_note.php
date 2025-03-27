<?php

class Solution
{

    /**
     * @param String $ransomNote
     * @param String $magazine
     * @return Boolean
     */
    function canConstruct(string $ransomNote, string $magazine): bool
    {
        $dictionary = [];
        $magazine_length = strlen($magazine);
        for ($i = 0; $i < $magazine_length; $i++) {
            if (!isset($dictionary[$magazine[$i]])) {
                $dictionary[$magazine[$i]] = 0;
            }
            $dictionary[$magazine[$i]]++;
        }

        $ransomNote_length = strlen($ransomNote);
        for ($i = 0; $i < $ransomNote_length; $i++) {
            if (!key_exists($ransomNote[$i], $dictionary) || $dictionary[$ransomNote[$i]] === 0) {
                return false;
            }
            $dictionary[$ransomNote[$i]]--;
        }

        return true;
    }
}
