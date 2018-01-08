<?php

require_once 'Builder.php';

class MilitaryBuilder implements Builder{
    
    public $Military_Resource;
    
    public function Build(){
        echo 'utworzono... coś...';
        //return $this->Military_Resource;
    }
    
    
    public function __construct(){
        
        echo 'utworzono builder Military <br><br>';
    }
    
    
    
    
    
    
    
}
