<?php

require_once 'Builder.php';

class StorageBuilder implements Builder{
    public function Build(){
        echo 'utworzono resource typu Storage <br><BR>';
    }
    
    
    public function __construct(){
        
        echo 'utworzono builder Storage <br><br>';
    }
    
    public function setStorageCapacity($sizeOfstorage) {
        
        
        echo 'Storage Capacity has been set to: '.$sizeOfstorage.'<br><br>';
    }
    
    
    
    
}
