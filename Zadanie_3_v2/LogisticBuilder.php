<?php

require_once 'Builder.php';

class LogisticBuilder implements Builder{
    private $SP;
    private $EP;
    
    public function Build(){
        //echo 'Utworzono Resource Logistic<br><BR>';
        return new Resource($this);
    }
    
    
    public function __construct(){
        
        echo 'utworzono builder Logistic <br><br>';
    }
    
    public function setStartPlace($startParam){
        $this->SP=$startParam;
        echo 'Start plase has ben set to: '.$this->SP.'<br><br>';
        return $this;
    }
    
    public function setDestinationPlace($endParam){
        $this->EP=$endParam;
        echo 'Destination place has benn set to: '.$this->EP.'<br><br>';        
        return $this;
    }
    
}
