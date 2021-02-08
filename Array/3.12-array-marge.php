<?php 
$fruits   =['Mango', 'Apple', 'Carot',];
$fruits1   =['Painapple', 'Watermelon'];
//Simple Merge
$simpleMerge   =   array_merge($fruits, $fruits1);
print_r($simpleMerge);
//Pluse Merge (marge depends on index, if found same index then ignore last founded index)
$pluseMerge =   $fruits+$fruits1;
print_r($pluseMerge); 

$fruits   =['a'=>'Mango', 'b'=>'Apple', 'c'=>'Carot',];
$fruits1   =['d'=>'Painapple', '12'=>'Watermelon'];
//Simple Merge but associative array if found same key ignore first founded key on the other hand this is not calculate numiric key
$simpleMerge   =   array_merge($fruits, $fruits1);
print_r($simpleMerge);
//it can calculate altt type of key but if found same key then ignore last key
$pluseMerge =   $fruits+$fruits1;
print_r($pluseMerge); 

?>