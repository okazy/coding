<?php

function solution($N) {
    // write your code in PHP7.0
    $binStr = decbin($N);
    $binStr = preg_replace(['/^0+/', '/0+$/'], '',$binStr);
    $zeros = explode('1', $binStr);
    $zeros = array_map(function ($zero) {
        return strlen($zero);
    }, $zeros);
    return max($zeros);
}
