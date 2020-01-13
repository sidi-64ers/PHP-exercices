<?php

$tab = array(15,22);
$tabCrochets = [15,22];

var_dump($tab);
var_dump($tabCrochets);

$jours = array("Lundi","Mardi","Mercredi","Jeudi","Vendredi","Samedi");

var_dump($jours);

echo $jours[2];

array_push ($jours, "dimanche"); // add sunday

var_dump($jours);

?>