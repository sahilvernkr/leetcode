<?php
class Solution {

    /**
     * @param String $s
     * @return Boolean
     */
    function isValid($s) {
       
        $comp = [')' => '(' , '}' => '{' , ']' => '['];
        $counter = [];
        $array = str_split($s);
        foreach($array as $arr){
           if(end($counter) == $comp[$arr] && !empty($counter))
           {
            array_pop($counter);
           }     
           else{
            $counter[] = $arr;
           }
        }

        if(count($counter) > 0){
            return false;
        }
        return true;
    }
}

//https://leetcode.com/problems/valid-parentheses/