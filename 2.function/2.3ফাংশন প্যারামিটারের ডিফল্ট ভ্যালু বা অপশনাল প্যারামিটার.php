<?php
/*Roing process of righiting a function is without default paramenter

function defaultArgument($fname,$mname,$lname){
  echo "My name is {$fname} {$mname} {$lname}";
}

defaultArgument('Md.'); // we can't do like this because still now we don't set any default Argument
defaultArgument('Md.', 'Mahabur Rahman');
*/

function defalutArgumentPHP7($fname = 'Md. Mahabur ',$mname = 'Rahman ',$lname = 'Nadim'){
  echo "My name is {$fname} {$mname} {$lname}";
}

defalutArgumentPHP7();
echo "\n";
defalutArgumentPHP7('Muslama', 'Akter', 'Jimi');

/* short cuircut is not working there

echo "\n older then php 7 default parametr";
// function defaultArgumentBelowPHP7($fname,$mname,$lname){
//   // below php  7 version
//   $fname = $fname || 'Md. Mahabur ';
//   $mname = $mname || 'Rahman ';
//   $lname = $lname || 'Nadim';
//   echo "My name is {$fname} {$mname} {$lname}";
// };

// defaultArgumentBelowPHP7();
echo "\n";

$fname = 0 || 'Md. Mahabur ';
echo $fname;
*/