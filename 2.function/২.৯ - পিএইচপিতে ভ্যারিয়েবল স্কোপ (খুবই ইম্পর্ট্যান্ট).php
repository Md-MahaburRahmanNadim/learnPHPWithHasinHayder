<?php

// global scope: everything is decler outside of a function it's called global scope
$name = 'Nadim';

function printMyName(){
  // echo $name;// in this line we get an error because we cant eccess here the global veriable. If we want to access this the we have to put (global)keyword infornt of the variable like below

  // global $name;

  // another triks we do here via super variable (GLOBAL['variableName'])
  /*An associative array containing references to all variables which are currently defined in the global scope of the script. The variable names are the keys of the array.*/

  echo $GLOBALS['name']; 
  /**
   * using global keyword is a bad prectice. godi amra thaki na pore tahola amra eyta use korbo nah
   */
}
printMyName();

echo "\n";
// local scope or function scope

function localScope(){
 global $names ;
  echo $names = 'Mahabur';;

}

localScope();
// but we cant use the $name variable outside of the function or any other function like below
echo "\n";
echo $names;  // but we can make the local veriable to global by putting the global keyword
echo "\n";

// static scope: mean it's sture the function veriable data. to farture calclutions
echo "Without static scope result see it's dont store the privious data \n";
function withOutstaticScope(){
  $i;
  // default value seting
  $i = $i ?? 0;
  $i++;
  echo $i ;
  echo "\n";

}
withOutstaticScope();
withOutstaticScope();
withOutstaticScope();
withOutstaticScope();
withOutstaticScope();


 echo "\n";
 echo 'With static scope see it\'s store the priveous data';
 echo "\n";

function withStaticScope(){
  static $i;
  // default value seting
  $i = $i ?? 0;
  $i++;
  echo $i ;
  echo "\n";

}
withStaticScope();
withStaticScope();
withStaticScope();
withStaticScope();
withStaticScope();