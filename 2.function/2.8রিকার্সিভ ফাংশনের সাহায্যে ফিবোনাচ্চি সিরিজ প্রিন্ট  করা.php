<?php
// 0 1 1 2 3 5 8 13 etc
/**
 
 */


 function fibonacci($veryOld,$old,$new,$end){
   if($veryOld > $end){
     return;
   }
   $new++;
   echo $veryOld .' ';
   //  to right temporiry veriable we have to start the variable name with (_)underscore like ($_temp)
   $_temp = $veryOld + $old;
   $veryOld = $old;
   $old = $_temp;
  fibonacci($veryOld,$old,$new,$end);

 }

 fibonacci(0,1,1,5);
echo "\n";
 function fibonacciStaticVariable($old,$new,$end){
   static $start;
   $start = $start ?? 0;
   if($end < $start){
     return;
   }
   $start++;
  //  echo $start. 's ';
   echo $old . ' ';
   $_temp = $old + $new;
   $old = $new;
   $new = $_temp;
   fibonacciStaticVariable($old,$new,$end);

 }

 fibonacciStaticVariable(0,1,5);