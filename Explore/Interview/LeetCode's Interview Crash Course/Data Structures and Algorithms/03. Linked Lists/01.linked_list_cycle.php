<?php

/*
 * Given the head of a linked list, determine if the linked list has a cycle.
 * There is a cycle in a linked list if there is some node in the list that
 * can be reached again by continuously following the next pointer.
 */
function has_cycle($head): bool
{
    $slow = $head;
    $fast = $head;
    while ($fast && $fast->next) {
        $slow = $slow->next;
        $fast = $fast->next->next;
        if ($slow == $fast) {
            return true;
        }
    }

    return false;
}

;
