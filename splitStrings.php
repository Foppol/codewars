<?php

// Split Strings

function solution($str) {

  if (strlen($str) < 1) { return [] ;}

  $str = appendUnderscoreIfUneven($str);
  
  $split = splitString ($str);

  return $split;
    
}

function appendUnderscoreIfUneven($str) {
  if (strlen($str) % 2 != 0) { 
    $str .= "_" ; 
  }
  return $str;
}

function splitString ($str) {
  $arr = str_split($str, 2);
  return $arr;
}



var_dump(solution(''));
echo "<br>";
var_dump(solution("abcdef"));
echo "<br>";
var_dump(solution("abcdasdsdasdaef"));
echo "<br>";
var_dump(solution("abcdasdsdaasdasdef"));
echo "<br>";
var_dump(solution("abcasdasddasdef"));
echo "<br>";
var_dump(solution("abasdasdcdef"));
echo "<br>";
var_dump(solution("abasddasdascdef"));
echo "<br>";
var_dump(solution("abcasddasdef"));
echo "<br>";
