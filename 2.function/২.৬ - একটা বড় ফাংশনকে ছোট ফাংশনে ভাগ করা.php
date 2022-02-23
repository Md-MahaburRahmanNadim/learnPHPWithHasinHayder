<?php
/* this function do 5 task at a time which is not good prectice. When we debug it right? So what can we do. We have to create single function for each steps 
function doTheLargerTask(){
  echo "Step A Done \n";
  echo "Step b Done \n";
  echo "Step c Done \n";
  echo "Step d Done \n";
  echo "Step e Done \n";
}
doTheLargerTask();
*/

function doTaskA(){
  echo "Step A Done\n";
}
function doTaskB(){
  echo "Step b Done\n";
}
function doTaskC(){
  echo "Step c Done\n";
}
function doTaskD(){
  echo "Step d Done\n";
}
function doTaskE(){
  echo "Step e Done\n";
}

function doTheLargerTask(){
  // just run the all function here
  doTaskA();
  doTaskB();
  doTaskC();
  doTaskD();
  doTaskE();
}

doTheLargerTask();
// this line of code is super mantniable because we divided all task in seperate function if we get an error then we search this error in the specific function which is more relaiable right ?