<?php

function detect_pangram($string) { 
  $isPangram = doesArrayExistsInString(createAlphabetArray(), $string);
  return $isPangram;
}

function doesArrayExistsInString($array, $string) : bool {
  $string = str_split(strtolower($string));
  foreach ($string as $letter) {
    $array =  removeFromArrayByValue($array, $letter);
  }
  if (empty($array)) { return TRUE; } 
  return FALSE;  
}

function removeFromArrayByValue ($array, $value) {
  if (($key = array_search($value, $array)) !== false) {
    unset($array[$key]);
  }
  return $array;
}

function createAlphabetArray () {
  $alphabet = "abcdefghijklmnopqrstuvwxyz";
  $alphabet = str_split($alphabet);
  $arr = [];
  foreach ($alphabet as $letter) {
    array_push($arr, $letter);
  }
  return $arr;
}
    
    echo detect_pangram( "The quick brown fox jumps over the lazy dog.");
    echo detect_pangram("1L%r+f4G!e7w V z q6M h4d F3b+t O2n e K^g+c#S^i4i X7c-u P5d7j Y6a(a B");
    echo detect_pangram("A pangram is a sentence that contains every single letter of the alphabet at least once.");
    echo detect_pangram("5B!e i J x*p F h d!A:o q D y n6L%u9i.G9f2g4C a h+K!m+z:R t!j:B w s C");

    function detect_pangram($string) { 
        $abc = range('a', 'z');
        foreach($abc as $s) {
          if(strpos(strtolower($string), $s) === false) {
            return false;
          }
        }
        
        return true;
      }

      function detect_pangram($string) { 
        $alphabet = range('a', 'z');
        $thisString = str_split(strtolower($string));
        return empty(array_diff($alphabet, $thisString)) ? true : false;
        }
