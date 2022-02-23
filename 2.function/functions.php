<?php

function isEven($n){
  if($n % 2 === 0){
    return true;
  }return false;
}

/*
find factorial which don't not except the string type data type. so if some one enter the strig type data then it must show the error right? LET make this functionality
*/

function factorialLoseType($n){
  $result = 1;
  for($i = $n; $i > 1; $i--){
    $result *= $i;
  }
  return $result;
}

/*
echo "\n";
echo var_dump('sd');
echo "\n";
echo gettype('sd'); // this is sutable to us to compayer the data type esaly then var_dump();
echo "\n";
echo gettype(23);
echo "\n";
echo gettype(23.0);
echo "\n";
echo gettype(true);
echo "\n";
echo gettype(false); */
function factorialStrickTypePhp7(int $n){

  // for below php 7 strick data type
 /* if(gettype($n) !== 'integer'){
    return 'invalid';
  }*/
  $result = 1;
  for($i = $n; $i > 1; $i--){
    $result *= $i;
  }
  return $result;
}

