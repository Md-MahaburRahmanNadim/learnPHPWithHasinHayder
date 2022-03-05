<?php
/**
 stirng to array 
 explode('delimeter',string);
 // if we have multi pattern then we have to use regular expression by using below method
 preg_split(regluarExpression,string)
 
 
 Array to string
join(glue, array)
 */

//  string to array
$aboutMe = "My name is Md. Mahabur Rahman Nadim.I am a student";
$strToArray = explode(' ',$aboutMe);
// echo $strToArray;
var_dump($strToArray);

// if we have multi pattern then we have to use (regular expression) like below
$strToArrayMultiPatternSeperator = preg_split('/(, |,)/', 'brinja, brocolli, carrot, capsicam,potato, sweet-potato,onion,ginger, letil');
// here the string has 2 pattern 1) is (,) comma and another is (, )comma and page
print_r($strToArrayMultiPatternSeperator);//now it's work masallah

// lets create string form array by using joined method

$joined = join(' ', $strToArray);
echo $joined;

$joinedArray = join(' ', $strToArrayMultiPatternSeperator);
echo "\n";
echo $joinedArray;