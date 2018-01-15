<?php

require_once 'Builder.php';
require_once 'Resource.php';

class MilitaryBuilder implements Builder{

   
    private $MB;
       
    public function Build(){
       
        //echo 'Tworzenie Resource Military...<br><BR>';
        return new Resource($this);
    }
    
    
    public function __construct(){
    
        echo 'utworzono builder Military <br><br>';
        
    }
    
    
    public function setTroopSize($sizeOfTroops){
        echo 'Troop size has been set to: '.$sizeOfTroops.'<br><br>';
        $this->MB = $sizeOfTroops;
        return $this;
    }
    
//    public function getParams(){
//        return $this->MB;
//    }
    

            
            
            
}
