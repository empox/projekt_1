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

 Zrobić klasę Book posiadajcą pole title - dostęp private
 Zrobić 3 różne klasy rozszerzajece klasę Book (JAVABook, PHPBook, NETBook)
 wszystkie 3 podklasy mają construktor bezparametrowy uzupełniając nadklasę 
 Book o tytuł program ma możliwość w sposób 
 minimalny umożliwić wypisania zawartości  pola title
 */

class Book {
    private $title;

}

class JAVAbook extends Book{
    public function __construct(){
        $this->title = "ksiazka o javie";
    
}
}

class PHPBook extends Book{
    public function __construct(){
        $this->title = "ksiazka o PHP";
        
    }
    
}

class NETBook extends Book{
    public function __construct(){
        $this->title = "ksiazka o dotNet";
    }
   
}

