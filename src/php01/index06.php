<?php
function GetFruits(){

    $fruits_array = ['apple', 'orange', 'melon',
                     'banana', 'pineapple'];
  
    return $fruits_array;
  }
  
  $fruits = GetFruits();
  
  print_r($fruits);