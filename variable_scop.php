<?php
//Example of Local Variable
function myName(){
    $name   =   "Shamim"; //Local variable 
    echo "My name is {$name} \n";  
}
myName();

//Example of Global Variable
$name   =   "S. A. Shamim"; //Global variable 
function myNameGlobal(){
    echo "My name is {$GLOBALS['name']} \n";  
//alternative way you can also use as like that
    global $name; // set the variable as global
    echo "My name is {$name} \n"; 
}
myNameGlobal();

//Example of Static Variable
function myStaticScope(){
    static $i;
    $i  =   $i  ??  0; //Null coalescing operator if $i value is present, then set the value of $i otherwise set 0 into $i
    $i++;
    echo $i.PHP_EOL;
}
myStaticScope();
myStaticScope();
myStaticScope();
?>