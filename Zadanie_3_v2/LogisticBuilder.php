<?php

require_once 'Builder.php';

class LogisticBuilder implements Builder{
    public function Build(){
        echo 'Utworzono Resource Logistic<br><BR>';
    }
    
    
    public function __construct(){
        
        echo 'utworzono builder Logistic <br><br>';
    }
    
    public function setStartPlace($startParam){
        
        echo 'Start plase has ben set to: '.$startParam.'<br><br>';
    }
    
    public function setDestinationPlace($endParam){
        
        echo 'Destination place has benn set to: '.$endParam.'<br><br>';        
    }
    
}
