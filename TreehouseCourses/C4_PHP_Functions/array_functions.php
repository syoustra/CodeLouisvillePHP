<?php


$names = array(
	'Mike' => 'Frog',
	'Chris' => 'Teacher',
	'Hampton' => 'Teacher'
	);

// array_keys()
// foreach (array_keys($names) as $name) {
// 	echo "Hello, $name!</br>";
// }


// array_walk()

function print_info($value, $key) {
	echo "$key is a $value.</br>";
}

array_walk($names, 'print_info');

?>