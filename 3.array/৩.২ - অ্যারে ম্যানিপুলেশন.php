<?php
/**
 array menuplution mean, insert data delete data,update an index etc via 
 (
   array_shift(),
   array_pop(),
   array_unshift('NameOfDataWhichYouWantInsert'),
   array_push('NameOfDataWhichYouWantInsert'),
 
 )
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

//  modifing existion index value
$names[4] = 'Hasan';
var_dump($names);

// removing last item of the array
array_pop($names);
var_dump($names);// you can see the last item Ahasan is removed form this array 
// remoing first item form any array
array_shift($names);
var_dump($names);

/**
 adding something syntex:
 functionName(arrayName,ValueWhichYouWantToInsert);
 */

// adding an item first of any array
array_unshift($names,'Md. Mahabur Rahman Nadim');
var_dump($names);
// adding an item last of any array
array_push($names,'Ahasan');
var_dump($names);