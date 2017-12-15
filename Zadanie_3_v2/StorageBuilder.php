<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of StorageResource
 *
 * @author Wojtek
 */
class StorageBuilder extends Factorio implements Builder_Interface{
    public function Build() 
    {
        echo 'kod funkcji build w klasie StorageBuilder';
    }
    
    public function __construct()
    {
        parent::__coonstruct();//wywolany konstruktor rodzica "factorio"
    }
    public function setTroopCapacity($capacity)
    {
        echo 'ustawia capacity '.$capacity; //zeby tylko zmienna byla uzywa - nic wiecej
    }
}
