<?php
class Merge{
    public static function mergeTwoLists($l1, $l2){
        $p1 = 0; $p2 = 0; $p = 0;
        $n = count($l1)+count($l2);
        while( $p < $n ) {
            if ($l1[$p1] && ($l1[$p1] < $l2[$p2]) || $p2 == count($l2)) {
                $arr[$p] = $l1[$p1];
                $p1++;
                $p++;
            } else {
                $arr[$p] = $l2[$p2];
                $p2++;
                $p++;
            }
        }
        return $arr;
    }

}
