<?php

function solution($A) {
    $t = [];
    foreach ($A as $a) {
        $t[$a] = isset($t[$a]) ? $t[$a]+1 : 1;
    }
    $ans = array_filter($t, function ($var) {
        return $var % 2;
    });
    $ans = array_keys($ans);
    return array_shift($ans);
}
