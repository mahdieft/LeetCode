<?php

function getCommon(array $nums1, array $nums2): int
{
    $countNums1 = count($nums1);
    $countNums2 = count($nums2);

    $pointerNums1 = 0;
    $pointerNums2 = 0;

    while ($pointerNums1 < $countNums1 && $pointerNums2 < $countNums2) {
        if ($nums1[$pointerNums1] === $nums2[$pointerNums2]) {
            return $nums1[$pointerNums1];
        }

        while ($nums1[$pointerNums1] < $nums2[$pointerNums2] && $pointerNums1 < $countNums1) {
            $pointerNums1++;
        }

        while ($nums2[$pointerNums2] < $nums1[$pointerNums1] && $pointerNums2 < $countNums2) {
            $pointerNums2++;
        }
    }

    return -1;
}
