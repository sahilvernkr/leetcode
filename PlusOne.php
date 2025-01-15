<?php
class Solution {

/**
 * @param Integer[] $digits
 * @return Integer[]
 */
function plusOne($digits) {
  $number = implode("",$digits) + 1;
  $number2 = str_split($number);
  return $number2;
}
}

//https://leetcode.com/problems/plus-one/