<?php

function findNumbers(array $nums): array
{
    $answer = [];

    $hashMap = [];
    foreach ($nums as $num) {
        $hashMap[$num] = true;
    }

    foreach ($nums as $num) {
        if (!key_exists($num + 1, $hashMap)
            && !key_exists($num - 1, $hashMap)) {
            $answer[] = $num;
        }
    }

    return $answer;
}
