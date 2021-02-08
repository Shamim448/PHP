<?php
$a = array(0 => 'blue', 1 => 'red', 6 => 'green', 3 => 'red');
//key|index position of value
$key = array_search('green', $a); // $key = 2;
echo $key . "\n";
if(in_array('red', $a)){
    echo "Red Found \n";
}
if(key_exists(1, $a)){
    echo "Key Found \n";
}
$key=array_keys($a);
print_r($key);

$values=array_values($a);
print_r($values);
?>