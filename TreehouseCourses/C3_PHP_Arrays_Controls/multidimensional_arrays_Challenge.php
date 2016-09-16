<?php

/* In the code below, we have a simple array of contact names. We want to use the $contacts array to fill in the hardcoded list of names an email addresses. To hold the email as well as the name for each contact, we need a multidimensional array, meaning each person in the contact list will have their own array. The first step is to make each person their own single item ASSOCIATIVE array, using 'name' as the key for these internal arrays.

$contacts = array('Alena Holligan', 'Dave McFarland', 'Treasure Porth', 'Andrew Chalkley');

echo "<ul>\n";
//$contacts[0] will return 'Alena Holligan' in our simple array of names.
echo "<li>Alena Holligan : alena.holligan@teamtreehouse.com</li>\n";
echo "<li>Dave McFarland : dave.mcfarland@teamtreehouse.com</li>\n";
echo "<li>Treasure Porth : treasure.porth@teamtreehouse.com</li>\n";
echo "<li>Andrew Chalkley : andrew.chalkley@teamtreehouse.com</li>\n";
echo "</ul>\n";
*/


//edit this array
$contacts = array(
  array('name' => 'Alena Holligan',
        'email' => 'alena.holligan@teamtreehouse.com'),
  array('name' => 'Dave McFarland',
        'email' => 'dave.mcfarland@teamtreehouse.com'),
  array('name' => 'Treasure Porth',
        'email' => 'treasure.porth@teamtreehouse.com'),
  array('name' => 'Andrew Chalkley',
        'email' => 'andrew.chalkley@teamtreehouse.com')
);

echo "<ul>\n";
//$contacts[0] will return 'Alena Holligan' in our simple array of names.
echo "<li>" . $contacts[0]['name'] . " : " . $contacts[0]['email'] . "</li>\n";
echo "<li>" . $contacts[1]['name'] . " : " . $contacts[1]['email'] . "</li>\n";
echo "<li>" . $contacts[2]['name'] . " : " . $contacts[2]['email'] . "</li>\n";
echo "<li>" . $contacts[3]['name'] . " : " . $contacts[3]['email'] . "</li>\n";
echo "</ul>\n";
?>