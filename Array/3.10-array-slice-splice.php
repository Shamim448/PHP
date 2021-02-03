<?php
//*********************Array Slice**************************** */

$fruits   =['Mango', 'Apple', 'Carot', 'Painapple', 'Watermelon'];
//print_r($fruits);
//Get output index1 to all with new index
$sliceArray =   array_slice($fruits, 1);
print_r($sliceArray);
//Get 2 output which start from index1  with new index
$sliceArray =   array_slice($fruits, 1, 2);
print_r($sliceArray);
//here -1 means last value of array  with new index
$sliceArray =   array_slice($fruits, 1, -1);
print_r($sliceArray);
//here -1 means last value of array  with orizinal index 
$sliceArray =   array_slice($fruits, 1, -1, true);
print_r($sliceArray);


//*********************Array Splice**************************** */