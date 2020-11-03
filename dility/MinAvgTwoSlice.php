<?php

function solution($A) {
    $ans = 0;
    $min = 100000;
    foreach (range(0,count($A)-2) as $p) {
        $sum = $A[$p];
        foreach (range($p+1,count($A)-1) as $q) {
            $sum += $A[$q];
            $ave = $sum/($q - $p + 1);
            if ($min > $ave) {
                $ans = $p;
                $min = $ave;
            }
        }
    }
    return $ans;
}

echo solution([4, 2, 2, 5, 1, 5, 8]);