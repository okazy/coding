<?php

function solution($A) {
    $sum = array_sum($A);
    $diff = [];
    $carry = 0;
    array_pop($A);
    foreach ($A as $a) {
        $carry+=$a;
        array_push($diff, abs($sum - $carry * 2));
    }
    return min($diff);
}

echo solution([3, 1, 2, 4, 3]);
