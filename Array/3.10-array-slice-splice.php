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
echo "**********Array Splice Output*******************";

$fruits   =['Mango', 'Apple', 'Carot', 'Painapple', 'Watermelon'];
//remove all without indes 0 & 1----
//array_splice($fruits, 2);

//remove all without indes 0 & 1 and last element---
//array_splice($fruits, 2,-1);

//remove only last value--------
//array_splice($fruits,-1);

//remove only first value--------
//array_splice($fruits,0, 1);

  
$addelement=['jackruit', 'Orange'];
//add elemenet in replace position on array
//array_splice($fruits, 2,2, $addelement);

//add elemenet in first position on array
//array_splice($fruits, 0, 0, $addelement);

//add elemenet in last position on array
array_splice($fruits, count($fruits), 0, $addelement);
print_r($fruits);
