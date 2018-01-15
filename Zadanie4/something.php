<?php

//pliki wczytane i wykonane beda w index.php

namespace GlobalSpace;

class something {
    
    public function doSommething(){
    echo 'I am using global namespace!<BR><BR>';
    }
}

namespace secondRealm;

class something {
    public function doSomething(){
        echo 'I belong to second realm! *sigh*<BR><BR>';
    }
}