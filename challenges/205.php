<?php
// 自分の得意な言語で
// Let's チャレンジ！！

$input_lines = fgets(STDIN);
$points = explode(" ", $input_lines);
$sum = array_sum($points);
$input_lines = fgets(STDIN);
if($sum >= $input_lines * 7) {
    echo "pass";
} else {
    echo "failure";
}
?>