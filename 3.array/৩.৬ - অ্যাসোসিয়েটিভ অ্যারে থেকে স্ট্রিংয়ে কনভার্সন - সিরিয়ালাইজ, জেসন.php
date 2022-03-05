<?php
$student = [
  'fname' => 'Nadim',
  'lname' => 'Hasan',
  'age' => 25,
  'Class' => 'Textile Engineering',
  'section' => 'C'
];

print_r($student);

echo $student['age'];
echo "\n";
// let's print full name
echo $student['fname'] . ' ' . $student['lname'];

echo "\n";
// we can do it much more esear via print function
printf("%s %s",$student['fname'],$student['lname']);

// lets convert arr to string via serialize and store it farther use

$serialize = serialize($student);
echo "\n";
echo $serialize; // now you can see peculera data. But php know it what is meaning of it

// to reuse this string we have to convert this string to an array again by using (unserialize)

print_r(unserialize($serialize));

// let's convert it into a json data by using json_encode

$jsonData = json_encode($student);
echo gettype($jsonData);
echo $jsonData;

// json to object
print_r( json_decode($jsonData));
echo "\n";
// json to array
print_r(json_decode($jsonData,true));