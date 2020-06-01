<?php

// Find the parity outlier
/*
You are given an array (which will have a length of at least 3, 
but could be very large) containing integers. The array is either 
entirely comprised of odd integers or entirely comprised of even 
integers except for a single integer N. Write a method that takes 
the array as an argument and returns this "outlier" N.
*/

function find($integers) {
  if (isParityEven($integers) === TRUE) {
    foreach ($integers as $integer) {
      if ($integer % 2 !== 0) { return $integer ; }
    } 
  }
  else {
    foreach ($integers as $integer) {
      if ($integer % 2 === 0) { return $integer ; }
    } 
  } 
}

function isParityEven($integers) : bool {
  $evenCount = 0;
  for ($i = 0 ; $i < 3 ; $i++) {
    if ($integers[$i] % 2 === 0) { $evenCount++ ; }
    if ($evenCount >= 2){ return TRUE; }
  }
  return FALSE ;
}