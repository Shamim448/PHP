<?php
$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a2=array("e"=>"red","f"=>"green","g"=>"blue");
//Compare the values of two arrays, and return the matches
$result=array_intersect($a1,$a2);
print_r($result);

$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a2=array("a"=>"red","b"=>"green","c"=>"blue");
//Compare the keys and values of two arrays, and return the matches:
$result=array_intersect_assoc($a1,$a2);
print_r($result);
$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a2=array("e"=>"red","f"=>"green","g"=>"blue");
//Compare the values of two arrays, and return the differences:
$result=array_diff($a1,$a2);
print_r($result);
?> 