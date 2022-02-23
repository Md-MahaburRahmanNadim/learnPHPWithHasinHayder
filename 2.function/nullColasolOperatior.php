<?php

$value =23;

// we can use this to define the default value.This freature in php7 
$result = null ?? null ?? $value ;
echo $result;

// null coalesce operator. We use this to set a devault value in function parameter or something like that 

