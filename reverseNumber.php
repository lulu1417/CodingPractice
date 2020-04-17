<?php
const MAX = 2147483647;
const MIN = -2147483648;
$x = -214748364;
$num_length = strlen((string)$x);
$result = 0;
if ($x < 0) {
    $num_length -= 1;
}
for ($i = 0; $i < $num_length; $i++) {
    $num = $x % 10;
    $add = $num * pow(10, $num_length - $i - 1);
    $result += $add;
    $x = ($x - $num) / 10;
}
if ($result > MAX || $result < MIN) {
    $result = 0;
}
echo $result;


