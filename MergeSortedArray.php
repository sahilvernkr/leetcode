<?php

class Solution {

    /**
     * @param Integer[] $nums1
     * @param Integer $m
     * @param Integer[] $nums2
     * @param Integer $n
     * @return NULL
     */
    function merge(&$nums1, $m, $nums2, $n) {
        array_splice($nums1,$m,$n,$nums2);
        return sort($nums1);

    }
}

//https://leetcode.com/problems/merge-sorted-array/
