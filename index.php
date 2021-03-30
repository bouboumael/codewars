<?php

function longestConsec($strarr, $k) {
    $result =[];
    for ($i = 0; $i < count($strarr)-$k; $i++ ){
      $b = $i;
      $string = '';
      while ($b <= $k){
        $string .= $strarr[$b];
        $b++;
      }
      var_dump($string);
    }
  }

  longestConsec(["tree", "foling", "trashy", "blue", "abcdef", "uvwxyz"], 2);