<?php

$my =   [
    'fname' =>  'Shamim',
    'lname' =>  'Hosen',
];
//copy by value or deep copy
$newMy=$my;
$newMy['fname']='S.A Shamim';//chenge $newMy but not impact on $my 
print_r($my)."\n";
print_r($newMy)."\n";

//copy bu reference or shallow copy
$newMy=&$my;
$newMy['fname']='S.A Shamim';//chenge $newMy but impact on $my 
print_r($my)."\n";
print_r($newMy)."\n";