<?php
/**
 Recursive function: A function which call by it's self.It's a vary usfull function.But the righitig this function is to much hard because we have to fall in infinite loop lot's of time. Because of not defining the function breaking condition 
 */

 function printN($i){
  //  Breaking condition
  // lets we want to print 1-10 number 
  if($i>10){
    return;
  }
  echo "{$i}\n";
  $i++;
  printN($i);// calling the function with same argument
 }

//  printN(0);

 echo "\n";
 function printNumber($counter,$end,$stepping=1){
   if($counter >= $end){
     return;
   }
   $counter += $stepping;
   echo "{$counter}\n";
   printNumber($counter,$end,$stepping);
 }
//  printNumber(0,100);

//  lets we right a function which show the number between 20 to 40.But use can give any two number 
function printFixdRange($counter = 20,$end = 40,$stepping=1){
  if($counter >=20){
    echo "$counter \n";
    
  }
  $counter+= $stepping;
    if($counter > 40){
      return;
    }
    printFixdRange($counter,$end,$stepping);
}
printFixdRange(0, 100,2);