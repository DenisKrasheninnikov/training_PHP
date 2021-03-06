<?php

$a = 25;
$b =& $a;
$b = 12;

echo $a . ' и ' . $b;

$a = 4;
$b = 'a';

echo $$b;

?>