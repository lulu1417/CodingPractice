<?php
const MAX = 2147483647;
const MIN = -2147483648;
$x = 214748347;
$num_length = strlen((string)$x);
$result = 0;
if ($x < 0) {
    $num_length -= 1;
}
$i = 0;
if ($x % 10 == 0) {
    $i = 1;
    $num_length++;
}

while ($i < $num_length) {
    $num = $x % 10;
    $add = $num * pow(10, $num_length - $i - 1);
    $result += $add;
    $x = ($x - $num) / 10;
    $i++;
}
if ($result > MAX || $result < MIN) {
    $result = 0;
}
echo $result;


