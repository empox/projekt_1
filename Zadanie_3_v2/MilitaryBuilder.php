<?php

require_once 'Builder.php';

class MilitaryBuilder implements Builder{
    
    public $Military_Resource;
    //public $sizeOfTroops;
    
    public function Build(){
        echo 'Utworzono Resource Military<br><BR>';
    }
    
    
    public function __construct(){
        
        echo 'utworzono builder Military <br><br>';
    }
    
    
    public function setTroopSize($sizeOfTroops){
        
        echo 'Troop size has been set to: '.$sizeOfTroops.'<br><br>';
    }
    
    
    
    
}
