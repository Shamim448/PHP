<?php

$fruits = array("lemon", "orange", "banana", "apple");
//The fruits have been sorted in alphabetical order ignor original index.
sort($fruits);
print_r($fruits);

$fruits = array(
    "Orange1", "orange2", "Orange3", "orange20"
);
//sort() example using case-insensitive natural ordering
sort($fruits, SORT_NATURAL | SORT_FLAG_CASE);
print_r($fruits);
// Sort alphabetical order with original key
$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
asort($fruits);
print_r($fruits);
// sort depends on key
$fruits = array("d"=>"lemon", "a"=>"orange", "b"=>"banana", "c"=>"apple");
ksort($fruits);
print_r($fruits);