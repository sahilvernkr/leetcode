<?php
class Solution {

    /**
     * @param String[] $strs
     * @return String
     */
    function longestCommonPrefix($strs) {
        $counter = "";
        $string = str_split($strs[0]);
        foreach($string as $check){
            for($i=1; $i<count($strs);$i++){
               $str = str_split($strs[$i]);
               foreach($str as $st){
                if($st == $check){
                $counter .= $st;
                }
                break;
               }
            }
        }
        return $counter;
       
    }
}

//https://leetcode.com/problems/longest-common-prefix/