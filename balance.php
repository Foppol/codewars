<?php

//Exclamation marks series #17: Put the exclamation marks and question marks to the balance, Are they balanced?

function balance(string $l, string $r): string {
  $left = countWeight($l) ;
  $right = countWeight($r) ;

  if ($left > $right){ return "Left" ; }
  elseif ($left < $right){ return "Right" ; }
  else { return "Balance" ; }
}


function countWeight ($str) {
  $weight = 0 ;
  foreach (str_split($str) as $i) {
    if ($i === "!") { $weight = $weight + 2 ; }
    elseif ($i === "?") { $weight = $weight + 3 ; }
  }
return $weight ; 
}