<?php
echo "<h2>PHP is Fun!</h2>";
echo "Hello world!<br>";
print



$cars = array("Volvo", "BMW", "Toyota");

foreach ($cars as $key => $car) {
    print($car);
}
$cars = array("Volvo", "BMW", "Toyota");
$arrlength = count($cars);

for($x = 0; $x < $arrlength; $x++) 
  echo $cars[$x];
  $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

foreach($age as $x => $x_value) 
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";
  $cars = array (
    array("Volvo",22,18),
    array("BMW",15,13),
    array("Saab",5,2),
    array("Land Rover",17,15)
  );
  $numbers = array(4, 6, 2, 22, 11);
sort($numbers);


?>
