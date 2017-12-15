<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MilitaryResource
 *
 * @author Wojtek
 */
class MilitaryBuilder extends Factorio implements Builder_Interface
{
    public function Build() 
    {
        echo 'nadpisana funkcja interfejsu w MilitaryBuilder';
    }
    
    public function __construct()
    {
        parent::__construct();//wywolany konstruktor rodzica "factorio"
    }
    public function setTroopSize($size)
    {
       echo 'TroppSize has been set to: '.$size; 
    }
    
}
