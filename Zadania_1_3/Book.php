<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Book
 *
 * @author Wojtek
 */
/*
 *Zadanie 1

 1. Zrobić klasę Book posiadajcą pole title - dostęp private
 2. Zrobić 3 różne klasy rozszerzajece klasę Book (JAVABook, PHPBook, NETBook)
 wszystkie 3 podklasy mają construktor bezparametrowy uzupełniając nadklasę 
 Book o tytuł program ma możliwość w sposób 
 minimalny umożliwić wypisania zawartości  pola title
 */

class Book {
    private $title;
    
    public function __construct($title){
        $this->title=$title;
        echo 'Nadano mi tytuł: '.$this->title.'<br><br>';
        }
    
}
    


class JAVAbook extends Book{
    public function __construct($tajtel)
            {
    echo "utworzyłem ksiazke o JAVA <br>"   ;    
        parent::__construct($tajtel);
                                                                                                     
}
}

class PHPBook extends Book{
    public function __construct($tajtel)
            {
     echo "utworzyłem ksiazke o PHP <br>"   ;     
        parent::__construct($tajtel);
    
}
}

class NETBook extends Book{
    public function __construct($tajtel){
   echo "utworzyłem ksiazke o PHP <br>";
        parent::__construct($tajtel);
     
    }
   
}

$java=new JAVAbook('blavle');
$java2=new JAVAbook('kaka');
$php=new PHPBook('ksiazkao PHP');
$php2=new PHPBook('PHPdla zielonych');