<?php

// Inizializzo classe e variabili d'istanza (attributi per la classe in questo caso )

class Movie{
    public $titolo;
    public $genere;

    function __construct($title, $genre){
        
        $this->titolo = $title;
        $this->genere = $genre;
    }

};

?>