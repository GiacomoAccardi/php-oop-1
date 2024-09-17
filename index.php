<?php

    //creo una nuova classe e la chiamo "movie"
    class Movie {

        //dichiaro delle variabili di istanza
        public $title;
        public $director;
        public $genre;
        public $year;
        public $length;

        //creo una funzione __construction 
        function __construct($_title, $_director, $_genre, $_year, $_length ){
            $this->title = $_title;
            $this->director = $_director;
            $this->genre = $_genre;
            $this->year = $_year;
            $this->length = $_length;
        }

        //creo un metodo che mi permetta di visualizzare a schermo le istanze
        public function show(){

            return "Titolo: ".$this->title." | Regista: ".$this->director." | Genere: ".$this->genre." | Anno: ".$this->year." | Durata: ".$this->length;

        }
    }

    //creo un'istanza
    $nightmare_bc = new Movie("Nightmare Before Christmas", "Henry Selick", "animazione", 1993, "73 minuti" );
    //applico la funzione show
    echo $nightmare_bc->show();

?>