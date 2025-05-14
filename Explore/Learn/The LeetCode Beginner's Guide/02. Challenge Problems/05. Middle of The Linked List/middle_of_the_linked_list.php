<?php

class ListNode
{
    public int $val;
    public ListNode|null $next;

    function __construct($val = 0, $next = null)
    {
        $this->val = $val;
        $this->next = $next;
    }
}

class Solution
{
    function middleNode(ListNode $head): ListNode
    {
        $slow = $fast = $head;

        while ($fast && $fast->next) {
            $slow = $slow->next;
            $fast = $fast->next->next;
        }

        return $slow;
    }
}
