<?php
$name = 'Stephanie';
$string_one = "Learning to display \"Hello $name!\" to the screen.\n";
echo $string_one;

$string_one = 'Learning to display "Hello ' . $name . '!" to the screen.' . "\n";
echo $string_one;

$string_one = 'Learning to display '
	.'"Hello '
	. $name
	. '!" to the screen.'
	. "\n";
echo $string_one;

$string_one = 'Learning to display ';
$string_one .= '"Hello ';
$string_one .= $name;
$string_one .= '!" to the screen.';
$string_one .= "\n";
//prepend to a string
$string_one = 'I am ' . $string_one;
echo $string_one;



$isReady = true;
var_dump($isReady);
$isReady = false;
var_dump($isReady);



?>