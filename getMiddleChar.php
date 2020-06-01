<?php

// Get the middle character

function getMiddle($text) { 
  $middlePos = strlen($text) / 2 ;
  if ($middlePos - intval($middlePos) === 0 && strlen($text) > 1 ) { $middle = getMiddleEven($text, $middlePos) ; }
  elseif ($middlePos - intval($middlePos) !== 0) { $middle = getMiddleUneven($text, $middlePos) ; }
  return $middle ;
}



function getMiddleEven($text, $middlePos) {
  $splittedStr = str_split($text);
  $arr = array($splittedStr[$middlePos - 1 ] , $splittedStr[$middlePos]) ;
  $text = implode($arr);
  return $text ;
}

function getMiddleUneven($text, $middlePos) {
  $splittedStr = str_split($text);
  $text = $splittedStr[$middlePos];
  return $text;
}
    




print_r(getMiddle("dxyBwasdassdaasdXqd"));