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
class Solution {

    /**
     * @param ListNode $head
     * @return ListNode
     */
    function deleteDuplicates($head) {
        $check = '';
        foreach($head as $key => $h){
            if($check == $h){
            unset($key);
            }
            $check = $h;
        }
        $values = array_values($head);
        return $values;
    }
}
//https://leetcode.com/problems/remove-duplicates-from-sorted-list/description/