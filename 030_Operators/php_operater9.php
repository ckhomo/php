<?php

$x = 100;
$y = &$x; // address of $x

$y = 200; // also change $x (in same address)
echo "x = $x </br>";

unset($x); // clear memory of $x
echo "y = $y </br>";
