<?php

$tab = array(15,22);
$tabCrochets = [15,22];

var_dump($tab);
var_dump($tabCrochets);

$jours = array("Lundi","Mardi","Mercredi","Jeudi","Vendredi","Samedi");

var_dump($jours); //display ($jours)

echo $jours[2];

array_push ($jours, "dimanche"); // add sunday

var_dump($jours);

array_pop($jours); //delete the last element of the tableau 

var_dump($jours);

unset($jours[3]); //destroy a variable index 3
var_dump($jours);


array_shift($jours); // delete the first element of the tableau
var_dump($jours);



?>