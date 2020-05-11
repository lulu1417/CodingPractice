<?php
$s = 'LVIII';
$roman = [
    'I' => 1,
    'V' => 5,
    'X' => 10,
    'L' => 50,
    'C' => 100,
    'D' => 500,
    'M' => 1000
];
$sum = $num = $roman[$s[strlen($s)-1]];
for ($i = strlen($s)-2; $i > -1; $i--) {
    $prevNum = $num;
    $num = $roman[$s[$i]];
    if ($prevNum > $num) {
        $sum -= $num;
    } else {
        $sum += $num;
    }
}
echo $sum;


