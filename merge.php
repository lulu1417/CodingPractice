<?php
class Merge{
    public static function mergeTwoLists($l1, $l2){
        $i = 0;
        $arr1 = explode("->", $l1);
        $arr2 = explode("->", $l2);
        $p1 = 0; $p2 = 0; $p = 0;
        $arr = array();
        $n = count($arr1)+count($arr2);
        while( $p < $n ) {
            if ($arr1[$p1] && ($arr1[$p1] < $arr2[$p2]) || $p2 == count($arr2)) {
                $arr[$p] = $arr1[$p1];
                $p1++;
                $p++;
            } else {
                $arr[$p] = $arr2[$p2];
                $p2++;
                $p++;
            }
        }
        $p = 0;
        $str = '';
        while( $p < $n-1 ){
            $str = $str.$arr[$p]."->";
            $p++;
        }
        $str = $str.$arr[$p];
        return $str;
    }

}