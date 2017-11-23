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
    private static $liczbaOb; 
    private function __construct(){}
    
    
    public static function pokazIleObj(){
        
        if (self::$liczbaOb === null){
            echo 'Nie stworzono żadnego obiektu!';
        }
        else
        {
        $liczba= self::$liczbaOb;
        echo $liczba;
        }
    }

}
jakasKlasa::pokazIleObj();

