<?php 
require 'Animal.php';
require 'Frog.php';
require 'Ape.php';

$sheep = new Animal("shaun");
echo $sheep->getName(); // "shaun"
echo "<br>";
echo $sheep->getLegs(); // 2
echo "<br>";
echo $sheep->getColdBlooded(); // false
// var_dump($sheep);

// NB: Boleh juga menggunakan method get (get_name(), get_legs(), get_cold_blooded())

// index.php
echo "<br>";
$sungokong = new Ape("kera sakti");
echo $sungokong->yell(); // "Auooo"
echo "<br>";
$kodok = new Frog("buduk");
echo $kodok->jump() ; // "hop hop"
?>