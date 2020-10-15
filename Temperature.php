
<?php

$temperature = array(78, 60, 62, 68, 71, 68,
73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74,
62, 62, 65, 64, 68, 73, 75, 79, 73);

$avgTemperature = 0;
foreach($temperature as $tp){
$avgTemperature += $tp;
}

$avgTemperature /= count($temperature);
echo "Average Temperature is : $avgTemperature";
echo "<br>";
echo "<br>";

sort($temperature);
echo "List of seven lowest temperatures : ";
for($i = 0; $i < 7; $i++){
echo "$temperature[$i]";
if($i < 6) echo ", ";
}
echo "<br>";
echo "<br>";

echo 'List of seven highest temperatures :';
for($i = count($temperature)-1; $i > count($temperature) - 8; $i--){
    echo "$temperature[$i]";
    if($i > count($temperature) - 7) echo ", ";
    }

?>