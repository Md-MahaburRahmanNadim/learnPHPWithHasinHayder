<?php
// declare(strick_types = 1);
// declare(strict_types=1);
//  this not support on php 7 it's a php 8 fretures
/**
 * syntax function fnName(parameter):returnType{
 * return (this data must me return type data)
 * }
 */
// in this function the return type is intger with this return type you get and error
 function fixedReturnType($num1,$num2,$num3):int {
  //  return 'abc';
   return "{$num1} {$num2} {$num3}dfd";
  // return 12;
 }
 echo "\n";
 echo fixedReturnType(23,4,1);
 echo "\n";
//  fixedReturnType('sd', 'sd',234);
 echo "\n";
 var_dump(fixedReturnType(23,234,23.23,34.234));
 echo "\n";

//  echo fixedReturnType('23', 23,1);
//  echo "\n";
//  echo fixedReturnType('n', 23, 4);\
function fixedReturnTypeString(string $name):string {
  return $name;
}
echo "\n";
echo fixedReturnTypeString(12.34);
echo "\n";
var_dump(fixedReturnTypeString(23.23));
echo "\n";
echo gettype(fixedReturnTypeString(23));

/*
falsey value 

Empty strings 
null
an undefined or undeclared variable
an empty array
the number 0
the string "0"

*/


// type conversion or Type Juggling 
/*
$foo = 1 + "10 Small Pigs";  
echo $foo;
$foo = 1 + "10.5";                // $foo is float (11.5)
$foo = 1 + "-1.3e3";              // $foo is float (-1299)
$foo = 1 + "bob-1.3e3";           // TypeError as of PHP 8.0.0, $foo is integer (1) previously
$foo = 1 + "bob3";                // TypeError as of PHP 8.0.0, $foo is integer (1) previously
$foo = 1 + "10 Small Pigs";       // $foo is integer (11) and an E_WARNING is raised in PHP 8.0.0, E_NOTICE previously
$foo = 4 + "10.2 Little Piggies"; // $foo is float (14.2) and an E_WARNING is raised in PHP 8.0.0, E_NOTICE previously
$foo = "10.0 pigs " + 1;          // $foo is float (11) and an E_WARNING is raised in PHP 8.0.0, E_NOTICE previously
$foo = "10.0 pigs " + 1.0;        // $foo is float (11) and an E_WARNING is raised in PHP 8.0.0, E_NOTICE previously

$foo = "1";  // $foo is string (ASCII 49)
$foo *= 2;   // $foo is now an integer (2)
$foo = $foo * 1.3;  // $foo is now a float (2.6)
$foo = 5 * "10 Little Piggies"; // $foo is integer (50)
$foo = 5 * "10 Small Pigs";     // $foo is integer (50)

*/