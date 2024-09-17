<?php

    //creo una nuova classe e la chiamo "movie"
    class Movie {

        //dichiaro delle variabili di istanza
        public $title;
        public $director;
        public $genre;
        public $description;
        public $length;

        //creo una funzione __construction 
        function __construct($_title, $_director, $_genre, $_description, $_length ){
            $this->title = $_title;
            $this->director = $_director;
            $this->genre = $_genre;
            $this->description = $_description;
            $this->length = $_length;
        }
    }

?>