<?php
// number in pounds that we want to convert to kilograms
$pounds = 140;
// floating point value for the pound to kilogram conversion
$lb_to_kg = 0.453592;
// use the variables above to calculate pounds multiplied by the kilogram conversion
$kilograms = $pounds * $lb_to_kg;
// display the pounds to kilograms
echo "Weight: ";
echo $pounds;
echo " lb = ";
echo $kilograms;
echo " kg";


// number in miles that we want to convert to kilometers
$miles = 2.5;
// floating point value for the mile to kilometer conversion
$mile_to_km =  1.60934;
// use the variables above to calculate miles multiplied by the kilometer conversion
$kilometers = $miles * $mile_to_km;
// display the miles to kilometers
echo "Distance: ";
echo $miles;
echo " miles = ";
echo $kilometers;
echo " km";


// EXTRA CREDIT PART 1
$kilograms = 140;
$kg_to_lb = 2.20462;
$pounds = $kilograms * $kg_to_lb;
echo "Weight: ";
echo $kilograms;
echo " kilograms = ";
echo $pounds;
echo " lb";

$kilometers = 2.5;
$km_to_mile = 0.621371;
$miles = $kilometers * $km_to_mile;
echo "Distance: ";
echo $kilometers;
echo " kilometers = ";
echo $miles;
echo " mi";


// EXTRA CREDIT PART 2
$fahrenheit = 72;
$fahr_to_cel_AFTER_SUBTRACT = 5/9;
$celsius = ($fahrenheit - 32) * $fahr_to_cel_AFTER_SUBTRACT;
echo "Temperature: ";
echo $fahrenheit;
echo " degrees Fahrenheit = ";
echo $celsius;
echo " degrees C";

$celsius = 72;
$cel_to_fahr_BEFORE_ADDING = 9/5;
$fahrenheit = $celsius * $cel_to_fahr_BEFORE_ADDING + 32;
echo "Temperature: ";
echo $celsius;
echo " degrees Celsius = ";
echo $fahrenheit;
echo " degrees F";


// EXTRA CREDIT PART 3
$dog = 13;
$dog_to_human = 7;
$human = $dog * $dog_to_human;
echo "Dog Age: ";
echo $dog;
echo " years = ";
echo $human;
echo " human years";

$human = 13;
$human_to_dog = 1/7;
$dog = $human * $human_to_dog;
echo "Human Age: ";
echo $human;
echo " years = ";
echo $dog;
echo " dog years";

?>