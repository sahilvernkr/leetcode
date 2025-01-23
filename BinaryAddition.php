<?php

class Solution
{
    /**
     * @param String $a
     * @param String $b
     * @return String
     */
    function addBinary($a, $b)
    {
        $sum = [];
        $ar = str_split(strrev($a));
        $br = str_split(strrev($b));
        $carry = 0;
        $loop = count($ar) > count($br) ? count($ar) : count($br);
        for ($i = 0; $i < $loop; $i++) {
            $tot = (int)$ar[$i] + (int)$br[$i] + $carry;
            $carry = 0;
            if ($tot == 0) {
                $sum[] = 0;
            }
            if ($tot == 1) {
                $sum[] = 1;
            }
            if ($tot == 2) {
                $sum[] = 0;
                $carry = 1;
            }
            if ($tot == 3) {
                $sum[] = 1;
                $carry = 1;
            }
        }
        if ($carry == 1) {
            $sum[] = 1;
        }
        return strrev(implode($sum));
    }
}

//https://leetcode.com/problems/add-binary/
