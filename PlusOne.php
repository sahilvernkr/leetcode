<?php

class Solution {

    /**
     * @param Integer[] $digits
     * @return Integer[]
     */
    function plusOne($digits) {
      $number = implode("",$digits) + 1;
      $array= [];
      for($i = 0 ; $i< strlen($number); $i++){
        $array[] = $number[$i];
      }
      return $array;
    }
}
//https://leetcode.com/problems/plus-one/