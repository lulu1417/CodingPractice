<?php
class Solution {

    /**
    * @param Integer $N
    * @return Integer
    */

    function fib($N) {
        $count = 1;
        $pre1 = 1;
        $pre2 = 0;
        $sum = 0;
        while($count < $N){
            $sum = $pre1 + $pre2;
            $pre2 = $pre1;
            $pre1 = $sum;
            $count++;
        }
        return $sum;
        
    }
}
