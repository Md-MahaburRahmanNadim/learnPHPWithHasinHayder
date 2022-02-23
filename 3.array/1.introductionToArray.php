<?php
/**
 * php array == to javascript array
 */

 $names = [
  'Md. Mahabur Rahman Nadim',
  'RH SIUM',
  'IFTY',
  'PARVIAGE',
  'Mokot',
  'Piays',
  'Abu Bakar',
  'Ahasan'
 ];

//  index === ofset or in programing language index of array are called (ofset)


// accissing array item via ofset
echo $names[1];
echo "\n";

// iterate array via loop forward 
$length = count($names);// to avoid the time of the loop. Because if we put this on the loop then it's excute 4 times right. But now it's excute 1 times only
for($i = 0; $i < $length; $i++){
  echo "{$names[$i]} \n";
}

echo "print revirse order \n";
for($i = $length - 1; $i >= 0; $i--){
  echo "{$names[$i]} \n";
}

echo "\n";
// do it's via foreach loop
foreach($names as $keys => $values){
  echo "{$values}: {$names[count($names) -($keys + 1)]} \n";
}
echo "\n";
$sortAnd = 'nadim' && 'hasan' && 'nadimh';
echo $sortAnd;

