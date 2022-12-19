<?php

include_once __DIR__ . './PHP-OOP-1/user.php';

$useruno = new Movie($title,$genre);

var_dump($useruno);

$useruno -> titolo = 'hulk';
$useruno -> genere = 'azione';

var_dump($useruno);

?>