<?php

function get_info($name, $title = null) {

	if($title) {
		echo "$name has arrived, they are with us as a $title";
	} else {
		echo "$name has arrived, welcome!";
	}

}

get_info('Mike','frog');


// function hello($arr) {
// 	if(is_array($arr)) {
// 		foreach($arr as $name) {
// 			echo "Hello, $name, how's it going?</br>";
// 		}
// 	} else {
// 		echo 'Hello, friends!';
// 	}
// }


// $names = array(
// 	'Hampton',
// 	'Mike',
// 	'Charley'
// );
// hello($names);



// $current_user = 'Hampton';

// function is_mike() {
// 	global $current_user;
// 	if($current_user == 'Mike') {
// 		echo 'It is Mike!';
// 	} else {
// 		echo 'Nope, it is not Mike.';
// 	}
// }

// is_mike();

?>