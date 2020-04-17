<?php

class Solution
{
    function removeDuplicates(&$nums)
    {
        $n = count($nums);
        $count = 1;
        $k = $nums[0];
        for ($i = 1; $i < $n; $i++) {
            if ($nums[$i] > $k) {
                $nums[$count] = $nums[$i];
                $count++;
                $k = $nums[$i];
            }

        }
        return $count;

    }
}
 
