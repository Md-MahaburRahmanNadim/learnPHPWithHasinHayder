<?php
/**
 * This called docx block. We can say something in here  
 * encapsulation = to hide the logic be hind the seen 
 */
// echo 'Nadim';

/* function declearation like javaScript function declearation
*/

/* here we cant recove nice what is the main parpus of the function. So we have to give a discriptive name 


function evenOrOdd($n)
{
  if($n % 2 ===  0){
    return true;
  }
  return false;
}
echo evenOrOdd(16);
var_dump(evenOrOdd(121));

$x = 1;

if(evenOrOdd($x)){
  echo "{$x} is an even number";
}else{
  echo "{$x} is an odd number";
}

*/

// to include the functions.php file we have to right this syntex
include_once 'functions.php';

$x = 12;

if(isEven($x)){
  echo "{$x} is a even number";
}else{
  echo "{$x} is a odd number";
};