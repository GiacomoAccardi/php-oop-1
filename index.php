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

            return "titolo: ".$this->title." regista: ".$this->director." genere: ".$this->genre." plot: ".$this->year." durata: ".$this->length;

        }
    }

?>