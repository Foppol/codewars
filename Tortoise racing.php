<?php

function race($v1, $v2, $g) {
  if ($v1 >= $v2) {
    return NULL;
  }
  $time = $g / ($v2 - $v1);
  $timeHours = intval($time);

  $timeMinutes = intval(($time - $timeHours) * 60);

  $timeSeconds = intval((((( $time - $timeHours ) * 60) - $timeMinutes) *60)% 60);
    
  return array($timeHours, $timeMinutes, $timeSeconds);

}


print_r(race(80, 91, 37));