<?php
require_once 'Factorio.php';
echo 'hello! <br>';



$Choice = new Factorio();
$resourceMilitary = $Choice->InitMilitaryBuilder()->setTroopSize(55)->Build()->showDescription();

$resourceStorage = $Choice->InitStorageBuilder()->setStorageCapacity(1000)->Build()->showDescription();

$ResLogistic = $Choice->InitLogisticBuilder()->setStartPlace('lodz')->setDestinationPlace('warszawa')->Build()->showDescription();


//$builder->setTroopSize(25)->Build();




 /*       


//Choice jest obiektem factorio z ktorego wywolujemy funkcje
//w choce jest zmienna a raczej obiekt ktory jest odpowiednim Builderem
//jako Resource generuje konkretny zasob przy pomocy funkcji build
//
//
//
//OK to działa
  */