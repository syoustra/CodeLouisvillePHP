<?php

// store each exercise in a string variable
$exercise1 = 'Display "Hello World!"';
$exercise2 = 'Convert Pounds to Kilograms';
$exercise3 = 'Convert Kilograms to Pounds';
$exercise4 = 'Convert Miles to Kilometers';
$exercise5 = 'Convert Kilometers to Miles';
$exercise6 = 'Month long string of the day';
$exercise7 = 'String of the day with levels';

// create a variable containing the day of the week
$day = date('N');
//var_dump($day);


// ADDITIONAL PRACTICE SECTION
// Show a greeting based on the time of day
$time = gmdate('G') - 4; // using GMT time bc my server is giving a different time zone
// echo $time;

$greeting1 = 'morning';
$greeting2 = 'afternoon';
$greeting3 = 'evening';
$greeting4 = 'night';

if ($time >= 5 and $time < 12 ) {
	echo "Good $greeting1! Your exercise is: ";
} elseif ($time >= 12 and $time < 17 ) {
	echo "Good $greeting2! Your exercise is: ";
} elseif ($time >= 17 and $time < 21 ) {
	echo "Good $greeting3! Your exercise is: ";
} elseif ($time >= 21 or $time < 1) {
	echo "Good $greeting4! Your exercise is: ";
} elseif ($time >= 1 and $time < 5) {
	echo "GO TO BED!!!!! Do NOT: ";
}


// $timezone = date('O'); CHECKING TIMEZONE ISSUES
// echo $timezone;


// END ADDITIONAL PRACTICE SECTION


// use an if statement to test for the day of the week
// display the corresponding exercise string
if ($day == 1) {
	echo $exercise1;
} elseif ($day == 2) {
	echo $exercise2;
} elseif ($day == 3) {
	echo $exercise3;
} elseif ($day == 4) {
	echo $exercise4;
} elseif ($day == 5) {
	echo $exercise5;
} elseif ($day == 6) {
	echo $exercise6;
} elseif ($day == 7) {
	echo $exercise7;
}


?>