<?php
$strs = ["aaa", "aa", "aaa"];
if($strs == null){
    $commonPrefix = "";
    return $commonPrefix;
}
$commonPrefix = $strs[0];
for ($i = 0; $i < count($strs); $i++) {
    if(strlen($strs[$i]) < strlen($commonPrefix)){
        $commonPrefix = $strs[$i];
    }
}

for ($i = 0; $i < count($strs); $i++) {
    $j = 0;
    while (isset($strs[$i][$j]) && isset($commonPrefix[$j])) {
        if ($commonPrefix[$j] !== $strs[$i][$j]) {
            $commonPrefix = substr($commonPrefix, 0, $j);
            break;
        }
        $j++;
    }
}
return $commonPrefix;

