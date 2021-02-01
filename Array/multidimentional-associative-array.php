<?php
$mark   =   [
    "Shamim"    =>  [
        "Bangla"    =>  80,
        "English"   =>  75,
        "Math"      =>  85,

    ],
    "Sopna"    =>  [
        "Bangla"    =>  75,
        "English"   =>  80,
        "Math"      =>  85,

    ],
    "Saba"    =>  [
        "Bangla"    =>  90,
        "English"   =>  95,
        "Math"      =>  85,

    ],
];
foreach($mark as $key=>$value){
echo $key. ' ';
foreach($value as $keys=>$value2){
    echo $keys. "=>" .$value2. ' ';  
}
echo PHP_EOL;
}


echo PHP_EOL;
echo $mark['Shamim']['Bangla'];
?>