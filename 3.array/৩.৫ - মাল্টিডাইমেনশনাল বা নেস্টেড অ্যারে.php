<?php
/*
multi dimantional array 
*/

$food = [
  'vegetables' => explode(',', 'brinjal, brocolli,carrot,capsicam'),
  'gruits' => explode(',','orange, banana, apple'),
  'drinks' => explode(',',',water, milk')
];

print_r($food);

echo $food['vegetables'][2];
array_push($food['drinks'],'orange juice');
print_r($food);

/**
if php multi  laven or nested is very importent to understand
 */

 
