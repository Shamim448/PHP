<?php
//0==start value, 15=end value, 3=steaping
$number = range(0,15, 3);
print_r ($number);
//shuffel

$my_array = array("red","green","blue","yellow","purple");

shuffle($my_array);
print_r($my_array[3]);
