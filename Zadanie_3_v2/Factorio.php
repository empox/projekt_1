<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Factorio
 *
 * @author Wojtek
 */
class Factorio{
   /**
    * konfiguracja obiektów xyzBuilder powinna być wyniesiona poza klasę Factorio
    * co zrobisz gdy będziesz musiał skonfigurować 10 parametrów w MilitaryBuilder,
    * a w StorageBuilder 2 parametry?
    */
    public function __construct($zmienna, $ResourceValue)
    {
        if ($zmienna = 1)
        {
            $Resource_Militaryo_Obj = new MilitaryBuilder();
            $Resource_Militaryo_Obj->setTroopSize($ResourceValue);
        }
        elseif ($zmienna = 2) 
        {
            $Resource_Storage_Obj = new StorageBuilder();
            $Resource_Storage_Obj->setTroopCapacity($ResourceValue);
        }
        else 
        {
            $Resource_Logistic_Obj = new LogisticBuilder();
            $Resource_Logistic_Obj->setStartPlace();
            $Resource_Logistic_Obj->setDestinationPlace();
        }
    }
}
