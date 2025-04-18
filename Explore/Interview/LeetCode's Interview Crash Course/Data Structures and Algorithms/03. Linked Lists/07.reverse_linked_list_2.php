<?php

/*
 * Given the head of a singly linked list and two integers left and right where left <= right,
 * reverse the nodes of the list from position left to position right, and return the reversed list.
 *
 * Example 1:
 * Input: head = [1,2,3,4,5], left = 2, right = 4
 * Output: [1,4,3,2,5]
 *
 * Example 2:
 * Input: head = [5], left = 1, right = 1
 * Output: [5]
 *
 * Constraints:
 *      The number of nodes in the list is n.
 *      1 <= n <= 500
 *      -500 <= Node.val <= 500
 *      1 <= left <= right <= n
 */
function reverse_between($head, $left, $right)
{
    if ($head === null) {
        return null;
    }
    $cur = $head;
    $prev = null;
    while ($left > 1) {
        $prev = $cur;
        $cur = $cur->next;
        $left--;
        $right--;
    }
    $con = $prev;
    $tail = $cur;
    $third = null;
    while ($right > 0) {
        $third = $cur->next;
        $cur->next = $prev;
        $prev = $cur;
        $cur = $third;
        $right--;
    }

    if ($con !== null) {
        $con->next = $prev;
    } else {
        $head = $prev;
    }
    $tail->next = $cur;
    return $head;
}
