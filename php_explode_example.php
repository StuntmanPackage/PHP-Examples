<?php
/**
 * Have fun, made by StuntmanPackage 
 * Date: February 18 2021 
 */

$address = "New Jersey, Pleasantville, 08232, 3846 Lincoln Street";
$america = explode(',', $address);

echo "City: $america[0]<br>";
echo "State: $america[1]<br>";
echo "ZIP Code: $america[2]<br>";
echo "Street: $america[3]<br>";

echo "<br>";

$pizza = "slide1 slide2 slide3 slide4 slide5 slide6";
$slides = explode(" ", $pizza);

echo "$slides[0]<br>";
echo "$slides[1]<br>";
echo "$slides[2]<br>";
echo "$slides[3]<br>";
echo "$slides[4]<br>";
echo "$slides[5]<br>";
?>