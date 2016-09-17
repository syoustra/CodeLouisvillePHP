<?php
$learn = array('Conditionals', 'Arrays', 'Loops');
$learn[] = 'Build something awesome!';
array_push($learn, 'Functions', 'Forms','Objects');
array_unshift($learn, 'HTML', 'CSS');

asort($learn);
rsort($learn);
sort($learn);

// echo 'You removed ' . array_shift($learn);
// echo 'You removed ' . array_pop($learn);
// var_dump($learn);
shuffle($learn);
echo $learn[0];


unset($learn[1], $learn[2]);
$learn = array_values($learn);
//$learn = 'My learning list';
$learn[0] = 'Email';


// var_dump($learn);
// var_dump($learn);
// echo $learn[1];
// echo implode("\n", $learn);
?>