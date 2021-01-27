<?php
$foods  =   [
"Vagitables"    =>  "Brinjal, Brocolli, Carot, Capsicam",
"Fruits"    =>  "Mango, Apple, Carot, Painapple",
"Drinks"    =>  "7up, Pepsi, Coo-ca-cola, Miranda",
];
//One way to output full value
foreach($foods as $key=>$value){
    echo $key." = ".$value."\n";
}
echo PHP_EOL;
//Collect Keys using "array_keys" functions
$keys =   array_keys($foods);
echo PHP_EOL;
print_r($keys);
echo PHP_EOL;
//count $keys array
$count  =   count($keys);
echo $count ."\n";

//Another way to get full output
for($i=0; $i<$count; $i++ ){
    $result = $keys[$i];
    echo $result." = ".$foods[$result]."\n";
}
?>