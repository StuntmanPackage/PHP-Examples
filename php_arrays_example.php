<?php
/**
 * Have fun, made by StuntmanPackage 
 * Date: February 16 2021 
 */

$carBrands = array("Mercedes", "Ford", "Audi", "BMW", "Jaguar");
$horsepower = array("Mercedes" => 200, "Ford" => 125, "Audi" => 450);

foreach ($carBrands as $value) {
    echo "The value is $value <br/>";
}

foreach ($carBrands as $a => $a_value){
	echo "Key=" . $a . ", Value=" . $a_value . "<br/>";
}

echo "This car from " . $carBrands['0'] . " has " . $horsepower['Mercedes'] . " horsepower <br/>";
echo "This car from " . $carBrands['1'] . " has " . $horsepower['Ford'] . " horsepower <br/>";
echo "This car from " . $carBrands['2'] . " has " . $horsepower['Audi'] . " horsepower <br/>";

for ($i = -5; $i <= 20; $i++) {
    echo $i . "&nbsp";
}
?>