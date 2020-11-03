<?php

function solution($N, $A) {
    // init
    $counter = [];
    $max = 0;
    foreach (range(1,$N) as $i) {
        $counter[] = 0;
    }

    // operations
    foreach ($A as $a) {
        if ($a <= $N) {
            if ($counter[$a-1] < $max) {
                $counter[$a-1] = $max;
            }
            $counter[$a-1]++;
        } else {
            $max = max($counter);
        }
    }

    foreach ($counter as $key => $value) {
        if ($counter[$key] < $max) {
            $counter[$key] = $max;
        }
    }
    return $counter;
}

print_r(solution(5, [3, 4, 4, 6, 1, 4, 4]));