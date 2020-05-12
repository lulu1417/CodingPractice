<?php
$s = "";
var_dump(isValid($s));
function isValid($s)
{
    $left = [];
    if ($s === '') {
        return true;
    }
    for ($i = 0; $i < strlen($s); $i++) {
        if ($s[$i] === '(' || $s[$i] === '[' || $s[$i] === '{') {
            array_push($left, $s[$i]);
        } else {
            if ($s[$i] === ')') {
                if (array_pop($left) !== '(') {
                    return false;
                }
            }
            if ($s[$i] === ']') {
                if (array_pop($left) !== '[') {
                    return false;
                }
            }
            if ($s[$i] === '}') {
                if (array_pop($left) !== '{') {
                    return false;
                }
            }
        }
    }
    if ($left === []) {
        return true;
    }else{
        return false;
    }
}
