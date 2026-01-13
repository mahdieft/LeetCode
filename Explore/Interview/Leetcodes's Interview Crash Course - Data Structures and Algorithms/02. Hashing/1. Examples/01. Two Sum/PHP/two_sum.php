<?php

function twoSum(array $nums, int $target): array
{
    $hashMap = [];
    foreach ($nums as $index => $num) {
        $complement = $target - $num;
        if (key_exists($complement, $hashMap)) {
            return [$index, $hashMap[$complement]];
        }
        $hashMap[$num] = $index;
    }
    return [-1, -1];
}
