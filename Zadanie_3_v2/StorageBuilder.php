<?php

require_once 'Builder.php';

class StorageBuilder implements Builder{
    
    private $LB;
    
    public function Build(){
        //echo 'utworzono resource typu Storage <br><BR>';
        return new Resource($this);
    }
    
    
    public function __construct(){
        
        echo 'utworzono builder Storage <br><br>';
    }
    
    public function setStorageCapacity($sizeOfstorage) {
        $this->LB=$sizeOfstorage;        
        echo 'Storage Capacity has been set to: '.$sizeOfstorage.'<br><br>';
        return $this;
    }
    
    
    
    
}
