<?php

/*
 * Given the head of a linked list and an integer k, return the kth node from the end.
 * For example, given the linked list that represents 1 -> 2 -> 3 -> 4 -> 5 and k = 2,
 * return the node with value 4, as it is the 2nd node from the end.
 */
function find_node($head, $k)
{
    $slow = $head;
    $fast = $head;
    for ($i = 0; $i < $k; $i++) {
        $fast = $fast->next;
    }

    while ($fast) {
        $slow = $slow->next;
        $fast = $fast->next;
    }

    return $slow;
}
