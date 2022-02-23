<?php
/**
 Accessing unlimeted argument via Rest of operator (...AnyName). It's basicaly convert all element or item to an array 
 */

 function UnlimitedArgViaRestOperator(int ...$UlArg):int{
   echo print_r($UlArg); // you can see that every argument are converted to an array 
   echo "\n";
  //  by looping we can access all the value of it
  echo count($UlArg); // it's like lenght property in arrar in javascript
  $result = 0;
  for($i = 0; $i < count($UlArg);$i++){
    $result += $UlArg[$i];

  }
  echo "\n";
  return $result;
 }
 echo "\n";
 echo UnlimitedArgViaRestOperator(23,234,453,234,23);

 function UlArgAccessViaForEachLoop(int ...$ulArgument):int{
   $result = 0;
   foreach($ulArgument as $singleItem){
    $result += $singleItem;
   }
   return $result;
 }
 echo "\n";
 echo UlArgAccessViaForEachLoop(1,3,4,6);