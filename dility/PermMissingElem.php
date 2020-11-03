<?php

function solution($A) {
    $a = array_flip($A);
    for ($i=1; $i<=count($a)+1; $i++) {
        if (!isset($a[$i])) {
            return $i;
        }
    }
}
