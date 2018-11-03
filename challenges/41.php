<?php
$input_lines = trim(fgets(STDIN));
for ($i = 0; $i < $input_lines; $i++) {
    $s = trim(fgets(STDIN));
    $s = str_replace(array("\r\n","\r","\n"), '', $s);
    $no = str_split($s);

    $even = 0;
    $odd = 0;

    for ($j = 0; $j < 15; $j++) {
        if ($j % 2 == 0) {
            $e = $no[$j] * 2;
            if ($e >= 10) {
                $even += $e - 9;
            } else {
                $even += $e;
            }
        } else {
            $odd += $no[$j];
        }
    }

    $sum = $even + $odd;
    $mod = $sum % 10;

    if ($mod == 0) $mod = 10;

    echo 10 - $mod . "\n";
}

