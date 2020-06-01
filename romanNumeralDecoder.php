<?php

// Roman numerals Decoder

function decodeRomanNumeral ($roman) {
  $num = 0;
  // setting Roman numerals
  $I = 1;
  $V = 5;
  $X = 10;
  $L = 50;
  $C = 100;
  $D = 500;
  $M = 1000;

  $arr = str_split($roman);

  foreach ($arr as $i) {
    $i = $$i;
    if (!isset($previous)) {
      $previous= $i;
      $num += $i;
    }
    elseif ($i > $previous) {
      $num = ($num - $previous) + ($i - $previous);
      $previous= $i;
    }
    else {
      $num += $i;
      $previous= $i;
    }
  }

return $num;

}

echo (decodeRomanNumeral('MCCCXXXVII') . "<br>");
echo (decodeRomanNumeral('MCMXC') . "<br>");
echo(decodeRomanNumeral('M') . "<br>");
echo (decodeRomanNumeral('X') . "<br>");
echo (decodeRomanNumeral('MXXXVIII') . "<br>");