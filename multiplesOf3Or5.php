<?php

// Multiples of 3 or 5

function solution($number){
    
  $arr =[];
  
  for ($i = 1 ; $i < $number ; $i++) {
    if ($i % 3 === 0 || $i % 5 === 0) {
    array_push($arr, $i);
    }
  }
  return array_sum($arr);
}

print_r(solution(23));