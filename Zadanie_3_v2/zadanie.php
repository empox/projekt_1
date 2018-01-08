<?php

/* 
Zadanie 3

Zbudować klase Factorio :) 
posiada 3 metody (funkcje)
Zwracają 3 różne klasy 
 * MilitaryBuilder, 
 * StorageBuilder, 
 * LogisticBuilder  
MilitaryBuilder storage posiada metodę setTroopSize konfigurującą obiekty wytwarzane

 * StorageBuilder storage posiada metodę setStorageCapacity konfigurującą obiekty wytwarzane,

 * LogisticBuilder storage posiada metody setStartPlace i setDestinationPlace konfigurującą obiekty wytwarzane,

 * wszystkie trzy implementują interface Builder z methodą build zwracającą interface Resource

 * Każda z powyższych klas służy do produkcji Resource (MilitaryResource, StorageResource, LogisticResource)
wewnątrz implementowanej metody przekazujemy parametry do klasy produkowanej za pomocą konstruktora
 * 
Interface Resource posiada metodę showDescription która zwraca tekst opisujący klasę konkretną

 * Klasy należy deklarrować w oddzielnych plikach
(DA SIĘ TO ZROBIĆ!!!! :) Poczytaj o deklaracji typów zwracanych i wejsciowych)

 * http://php.net/manual/en/functions.arguments.php
http://php.net/manual/en/functions.returning-values.php
 */

