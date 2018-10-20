<?php
$a = trim(fgets(STDIN));
$a = str_replace(array("\r\n","\r","\n"), '', $a);
$b = trim(fgets(STDIN));
$b = str_replace(array("\r\n","\r","\n"), '', $b);
echo $a * $b . "\n";
