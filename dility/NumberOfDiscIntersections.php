<?php

function solution($A) {
    $count = 0;
    foreach (range(0, count($A)-2) as $keyJ) {
        foreach (range($keyJ+1, count($A)-1) as $keyK) {
            if (($keyJ + $A[$keyJ]) >= $keyK - $A[$keyK]) {
                $count++;
            }
        }
    }
    return $count;
}


