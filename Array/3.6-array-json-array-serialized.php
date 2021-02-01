<?php
$info   =   [
'First Name'    =>  'Shamim',
'Last Name'     =>  'Hosen',
'ID No'         =>  'GS0037',
'Designation'   =>  'Sr. Officer',
];
print_r($info);
printf("%s %s", $info['First Name'], $info['Last Name']);
echo PHP_EOL;
// associative attay to string
$serialize= serialize($info);
echo $serialize."\n";

//string to associative array
print_r (unserialize($serialize));

//Associative array to string using "json"= java script object notation
$student= json_encode($info);
echo $student."\n";
echo PHP_EOL;
//string to stdclass object "JSON
print_r (json_decode($student));

//string to array "JSON
print_r (json_decode($student, true));
