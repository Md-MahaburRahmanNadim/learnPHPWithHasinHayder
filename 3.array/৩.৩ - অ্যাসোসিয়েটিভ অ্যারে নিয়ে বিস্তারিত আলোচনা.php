<?php
/**
  Accocitive array like an object.Because it has key => value pair
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

//  key => value pair array
$studentsRoll =[
  '1'=> $names[0],
  '2' => $names[1],
  '3' => $names[2],
  '4' => $names[3],
  '5' => $names[4],
  '6' => $names[5],
  'age' => 25
];

// accessing value manully
echo $studentsRoll[1];
echo "\n";
echo $studentsRoll[2];
echo "\n";
echo $studentsRoll[3];
echo "\n";
echo $studentsRoll[4];// here type conversion occerd
echo "\n";
// echo $studentsRoll[age]; this give an error because it's have to in single or duble quests
echo $studentsRoll['age'];

// Categories: ['Italian', 'Pizzeria', 'Vegetarian', 'Organic']
$restorent = [
  'categories' => "'Italian', 'Pizzeria', 'Vegetarian', 'Organic'",
  'girlFood' => "'focaccia', 'Bruschetta', 'Garlic', 'Bread', 'Caprese Salad'"
];

echo $restorent['categories'];
echo "\n";
echo $restorent['girlFood'];
echo "\n";

// we can iterate via loop very esaly by using foreach loop
foreach($studentsRoll as $stdRool => $stdName){
  echo $stdRool . ": {$stdName}". "\n";
}
// foreach loop is used in real life

// can we do this via for loop?
$keys = array_keys($studentsRoll);
echo print_r($keys); // array_keys($anyArray) it's convert any accocitive array key to an index basied array
$values = array_values($studentsRoll);
echo "\n";
echo print_r($values);
// lets iterate accocitive array by the help of $keys and $values variable

for($i = 0; $i < count($values); $i++){
  // let print values
  echo $values[$i] . "\n";

}// very esay right if you know the tricks right?

