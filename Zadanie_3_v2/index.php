<?php
require_once 'Factorio.php';
echo 'hello! <br>';



$Choice = new Factorio();
$Choice->InitMilitaryBuilder(); 

$Resource = $Choice->ResourceBlueprint->Build();

//Choice jest obiektem factorio z ktorego wywolujemy funkcje
//w choce jest zmienna a raczej obiekt ktory jest odpowiednim Builderem
//jako Resource generuje konkretny zasob przy pomocy funkcji build
//
//
//
//OK to działa