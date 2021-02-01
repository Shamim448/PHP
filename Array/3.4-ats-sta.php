<?php
//String 
$students   =   ("Shamim, Saba, Fatema, Apple");
echo $students. "\n";
//Print String as a  array
// $students   =   explode(", ", "Shamim, Saba, Fatema, Apple");
print_r (explode(", ", $students)). "\n";
//Array
$student   = ['Fatema', 'Saba', 'Shamim', 'Apple'];
print_r($student). "\n";
//print array as a string 
echo implode(' ', $student). "\n";



?>