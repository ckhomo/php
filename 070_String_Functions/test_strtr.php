<?php
// String translate:
// strtr ( string $str , string $from , string $to ) : string
// strtr ( string $str , array $replace_pairs ) : string
// action varies up to the input numbers(2 ^ 3)
// if 2: ( $str, array $raplace_pairs )
// do translation by the pairs in array.action-list
//
//if 3: ( $str , $from , $to )
// Translate $str: every $from => $to.(reverse is also available.)
  echo strtr("02468-86420", "86420", "97531");
?>