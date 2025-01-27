<?php

/**
 * Definition for a singly-linked list.
 * class ListNode {
 *     public $val = 0;
 *     public $next = null;
 *     function __construct($val = 0, $next = null) {
 *         $this->val = $val;
 *         $this->next = $next;
 *     }
 * }
 */
class Solution
{

    /**
     * @param ListNode $head
     * @return ListNode
     */
    function deleteDuplicates($head)
    {
        $newHead = $head;

        while ($head != null) {
            if ($head->next->val === $head->val) {
                $head->next = $head->next->next;
            } else {
                $head = $head->next;
            }
        }

        return $newHead;
    }
}
//https://leetcode.com/problems/remove-duplicates-from-sorted-list/description/