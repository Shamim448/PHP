<?php 
// Array Diclaretion
$students   =   [
    "Shamim",
    "Fatema",
    123,
    "Apple",
];
//cheange 123 valu depends on index
$students[2]    =   "Saba";
//remove last element from array "Apple" 
array_pop($students);
//remove first element from array "Shamim"
array_shift($students);
//Insert Last element in array "Anisha"
array_push($students, "Anisha");
//Insert First element in array "Sabria"
array_unshift($students, "Sabria");

$n  =   count( $students );
    for($i=0; $i<$n; $i++){
        echo $students[$i]."\n";
    }

?>