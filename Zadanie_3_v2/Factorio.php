<?php

require_once 'MilitaryBuilder.php';
require_once 'StorageBuilder.php';
require_once 'LogisticBuilder.php';


class Factorio{ //director (?)
   
    //private $resource;
    
    public function __construct() {
        echo 'utworzono "fabryke" <br><br>';
    }
    
    public function InitMilitaryBuilder(){ //funkcja zwracajaca konkretny builder
        return new MilitaryBuilder();
    }
    
    public function InitStorageBuilder(){
        return new StorageBuilder();
    }
    
    public function InitLogisticBuilder(){
        return new LogisticBuilder();               
    }
    /*
    public function BuildResource(){
        $this->resource
    }*/
    
}


