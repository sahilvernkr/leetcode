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

#solution 2

class Solution {

    /**
     * @param Integer[] $nums
     * @return Boolean
     */
    function containsDuplicate($nums) {
     sort($nums);
    for($i=0; $i< count($nums) - 1; $i++)
     {
        if($nums[$i] == $nums[$i+1]){
            return true;
        }
     }
     return false;
}
}

//solution 3
class Solution {

    /**
     * @param Integer[] $nums
     * @return Boolean
     */
    function containsDuplicate($nums) {
     $hash = [];
     foreach($nums as $num){
        if(in_array($num, $hash)){
            return true;
        }
        $hash[] = $num;
     }

     return false;
}
}

//https://leetcode.com/problems/contains-duplicate/