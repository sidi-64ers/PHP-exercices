<?php

$activites = array("Lundi"=>"Php","Mardi"=>"Javascript", "Mercredi"=>"Typescript","Jeudi"=>"Angular","Vendredi"=>"SQL","Samedi"=>"Python","Dimanche"=>"Tout");
var_dump($activites);



asort($activites[Dimanche] = "repos du guerrier"); //change Sunday activity with the function "asort"
var_dump($activites);
//deux dimensions
$pierre = array("1"=>"Php","2"=>"Javascript","3"=>"Python");
$paul = array("1"=>"Javascript","2"=>"Css","3"=>"Php");
$jacques = array("1"=>"Java","2"=>"Php","3"=>"Javascript");

$preferences = array_merge($pierre, $paul, $jacques); //join the 3 arrays with the function array_merge 
var_dump($preferences);

$preferences = array(
    $pierre = array("1"=>"Php","2"=>"Javascript","3"=>"Python"),
    $paul = array("1"=>"Javascript","2"=>"Css","3"=>"Php"),
    $jacques = array("1"=>"Java","2"=>"Php","3"=>"Javascript"),

); 
var_dump($preferences);

?>