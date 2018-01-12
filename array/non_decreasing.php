<!DOCTYPE html>
<html>
<body>

<?php
$A = array(7, 6, 5, 3, 4, 2, 1);
sort($A);

$arrlength = count($A);
for($x = 0; $x < $arrlength; $x++) {
    echo $A[$x];
    echo "<br>";
}

foreach ($A as $key => $value) {
    echo "$key\n <br>";
}

$prices =array(141.95,212.95,411,10.95);
$sum =0;
for($i=0; $i< count($prices);$i++){
    
    $sum+=$prices[$i];
    $average = $sum/count($prices);
    echo $average;
}
?>

</body>
</html>