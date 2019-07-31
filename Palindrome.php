<?php
class Palindrome{
    public static function isPalindrome($x){

        $n = 0;
        $arr = array();
        $p2 = 0;
        while ($x > 1 || $x == 1) {
            $pop = $x % 10;
            $arr[$n] = $pop;
            $x /= 10;
            $n++;
        }
        if ($x < 0) {
            return false;
        } else if ($n % 2 != 0) {
            $p = ($n - 1) / 2;
            $i = 1;
            while ($p2 < ($n-1)) {
                $p1 = $p - $i;
                $p2 = $p + $i;
                if ($arr[$p1] != $arr[$p2]) {
                    return false;
                }
                $i++;
            }
            return true;
        } else {
            $p = $n / 2 - 1;
            $i = 0; $j = 1;
            while ($p2 < ($n - 1)) {
                $p1 = $p - $i;
                $p2 = $p + $j;
                if ($arr[$p1] != $arr[$p2]) {
                    return false;
                }
                $i++;
                $j++;
            }
            return true;
        }
    }
}