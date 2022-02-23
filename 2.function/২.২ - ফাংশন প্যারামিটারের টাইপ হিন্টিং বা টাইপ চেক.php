<?php
/**
 * 
 */

 include_once 'functions.php';
// here we can give any data type easly. But it shoud not be recive any data it should be strick right below function
echo factorialLoseType(4);
echo "\n";
echo factorialLoseType('sd'); // here we must have an error right 
echo "\n";
echo factorialLoseType(0);
echo "\n";


// strickType function which only take interger as a arg. If you give any data type except integer then you get an error
echo factorialStrickTypePhp7('se'); // like this line

echo factorialStrickTypePhp7(12);
