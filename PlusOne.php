<?php
class Solution
{

  /**
   * @param Integer[] $digits
   * @return Integer[]
   */
  function plusOne($digits)
  {
    return str_split(bcadd(implode($digits), 1));
  }
}


//https://leetcode.com/problems/plus-one/