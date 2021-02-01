<?php
//multidimentional array
$employee   =   [
    [1, 'Miner Hosen', 'M0014', 'Asst. Manager', 64000],
    [2, 'Shamim Hosen', 'GS0037', 'Sr. Officer', 35000],
    [3, 'Kamrul Hosen', 'GS00124', 'Officer', 28000],
    [4, 'Saddam Hosen', '1287', 'Jr. Officer', 22000],
];
// Same output using for loop
// for($row=0; $row<4; $row++){
//     for($col=0; $col<5; $col++){
//         echo $employee[$row][$col]." ";
//     }
//     echo PHP_EOL;
// }

echo PHP_EOL;
echo "<table border='2px' cellpadding='5px' cellspacing='0px'>";
echo "<tr>
<th> Sl No. </th>
<th> Name </th>
<th> ID No </th>
<th> Designation </th>
<th> Salery </th>
</tr>";

foreach($employee as $v1){
    echo "<tr>";
    foreach($v1 as $v2){

        echo "<td>" .$v2. "</td>";
    }
    echo "</tr>"; 
}
echo "</table>";


echo "<br>";
echo "<pre>";
print_r($employee);
echo "</pre>";

?>