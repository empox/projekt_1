<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.


Zadanie 2

Stworzyć klasę która swoją budową umożliwia stworzenie dokładnie jednego egzemplarza swojej klasy
(podpowiedź construktor jest prywatny)
*/

class jakasKlasa{
    private static $obiekt; 
    public $ile;
    private function __construct(){}
    
    
    public static function pokazIleObj(){
        
        if (self::$obiekt === null){
            echo '<br>Nie stworzono żadnego obiektu! Zaraz go stworzę...<br>';
        self::$obiekt=new jakasKlasa();
        //$ile++;
            echo '<br>obiektów: przynajmniej 1<br>';
        }
        
        else
        {
            echo '<br>Próbuję stworzyć obiekt ale obiekt już został stworzony<br><br>';
        }
        return self::$obiekt;
    }

}
$raz=jakasKlasa::pokazIleObj();

$dwa=jakasKlasa::pokazIleObj();


echo $raz==$dwa;
/*if ($raz==$dwa){
    echo 'raz jest taki sam';//Powinno tak byc?
}*/
$trzy=jakasKlasa::pokazIleObj();