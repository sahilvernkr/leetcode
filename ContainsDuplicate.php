<?php

class Solution {

/**
 * @param Integer[] $nums
 * @return Boolean
 */
function containsDuplicate($nums) {
   $countOfValues = array_count_values($nums);
   foreach($countOfValues as $value){
    if($value > 1){
        return true;
    }
   }
   return false;
}
}

//https://leetcode.com/problems/contains-duplicate/