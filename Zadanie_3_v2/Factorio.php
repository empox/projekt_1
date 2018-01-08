<?php

require_once 'MilitaryBuilder.php';
require_once 'StorageBuilder.php';
require_once 'LogisticBuilder.php';


class Factorio{ //director (?)
   
    public $ResourceBlueprint;
    
    public function __construct() {
        echo 'utworzono "fabryke" <br><br>';
    }
    
    public function InitMilitaryBuilder(){ //funkcja zwracajaca konkretny builder
        return $this->ResourceBlueprint = new MilitaryBuilder();
    }
    
    public function InitStorageBuilder(){
        return $this->ResourceBlueprint = new StorageBuilder();
    }
    
    public function InitLogisticBuilder(){
        return $this->ResourceBlueprint = new LogisticBuilder();               
    }
    
}


