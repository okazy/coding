<?php

$a_min = 1;
$a_max = 1000;

$values = [];

$input_lines = trim(fgets(STDIN));
for ($n = 0; $n < $input_lines; $n++) {
    $s = trim(fgets(STDIN));
    $s = str_replace(array("\r\n","\r","\n"), '', $s);
    $values[] = $s;
}

for ($i = $a_min; $i <= $a_max; $i++) {
    foreach ($values as $value) {
        if ($value == $i) {
            echo $value."\n";
        }
    }
}


