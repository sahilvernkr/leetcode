<?php
class Solution {

    /**
     * @param String $haystack
     * @param String $needle
     * @return Integer
     */
    function strStr($haystack, $needle) {
        $pos = stripos($haystack, $needle);
        if($pos === false){
            return -1;
        }
        return $pos;
    }
}

//https://leetcode.com/problems/find-the-index-of-the-first-occurrence-in-a-string/