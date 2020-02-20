<?php
// strpos ( string $haystack , mixed $needle [, int $offset = 0 ] ) : int
// return the "first" position of certain string $haystack "as an integer".
// If no: return "false"(boolean).
$s = "qira_yoshikage killer_queen";
$pos = strpos($s, "ki");
if ($pos !== false) { // found
    echo "found" . "<br>";
    echo $pos;
} else {
    echo "not found";
}
