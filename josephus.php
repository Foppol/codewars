<?php

// Josephus Permutation

function josephus(array $items, int $k): array {
  $deathCounter = 1;
  $arrayOfDeath = [];
  while ( ! empty($items)) {
    foreach ($items as $key => $soldier){
      $key = array_search($soldier, $items);
      if ($deathCounter % $k === 0){
        array_push($arrayOfDeath, $soldier);
        unset($items[$key]);
        $items = array_values($items); 
      }   
      $deathCounter++; 
    }  
  }
  return $arrayOfDeath;
}

print_r(josephus([1,2,3,4,5,6,7],3));

