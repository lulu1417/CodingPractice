<?php
$num1 = 0;
$num2 = 1;
echo $num1.',';
echo $num2.',';
for($i=2; $i< 11 ;$i++){
    $sum = $num1 + $num2;
    $num1 = $num2;
    $num2 = $sum;
    echo $sum;
    if($i!=10){
        echo ',';
    }
}