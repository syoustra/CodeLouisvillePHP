<?php

$phrase = "We only hit what we aim for";

$len = strlen($phrase);
//echo $len;

//substr
//echo substr($phrase, 0, 5);


//strpos
$start = strpos($phrase, 'hit');
echo substr($phrase, $start);

?>