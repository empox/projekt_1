<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of LogisticResource
 *
 * @author Wojtek
 */
class LogisticBuilder extends Factorio implements Builder_Interface
{
    public function Build() 
    {
        echo 'kod metody Build w klasie LogisticBuilder';
    }
    public function __construct() 
    {
        parent::__construct();//wywolany konstruktor rodzica "factorio"
    }
    
    public function setStartPlace() 
    {
        
    }
    public function setDestinationPlace()
    {
        
    }
}
