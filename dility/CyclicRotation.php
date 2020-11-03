<?php

function solution($A, $K) {
    $a = [];
    $c = count($A);
    for ($i=0; $i<$c; $i++) {
        $a[] = $A[($c*100+$i-$K)%$c];
    }
    return $a;
}
