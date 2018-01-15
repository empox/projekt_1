<?php


class Resource {
    private $Res;
    public function __construct($temp) {
        $this->Res = $temp;    
    }
    
    public function showDescription() {
        if($this->Res instanceof MilitaryBuilder){
            
        echo 'Utworzono Military Resource!<BR><BR>';
        }
        elseif ($this->Res instanceof StorageBuilder) {
        echo 'Utworzono Storage Resource!<BR><BR>';
        }
        elseif ($this->Res instanceof LogisticBuilder) {
        echo 'Utworzono Logistic Resource!<BR><BR>';
    }
       
        
    }
}
