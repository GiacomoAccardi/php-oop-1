<?php

    //creo una nuova classe e la chiamo "movie"
    class Movie {

        //dichiaro delle variabili di istanza
        public $title;
        public $director;
        public $genres;
        public $year;
        public $length;

        //creo una funzione __construction 
        function __construct($_title, $_director, $_genres, $_year, $_length ){
            $this->title = $_title;
            $this->director = $_director;
            $this->genres = $_genres;
            $this->year = $_year;
            $this->length = $_length;
        }

        //creo un metodo che mi permetta di visualizzare a schermo le istanze
        public function show(){

            return "Titolo: ".$this->title." | Regista: ".$this->director." | Genere: ".$this->genres." | Anno: ".$this->year." | Durata: ".$this->length;

        }
    }

    //creo un'istanza
    $nightmare_bc = new Movie("Nightmare Before Christmas", "Henry Selick", ["animazione,", "commedia"], 1993, "73 minuti" );
    //applico la funzione show
    // echo $nightmare_bc->show();
    // echo "<hr>";

    //creo altre istanze
    $hereditary = new Movie("Hereditary - Le radici del male", "Ari Aster", ["horror,", "thriller"], 2018, "127 minuti" );
    // echo $hereditary->show();
    // echo "<hr>";

    $donnie = new Movie("Donnie Darko", "Richard Kelly", ["fantascienza,", "thriller,", "drammatico"], 2001, "113 minuti" );
    // echo $donnie->show();
    // echo "<hr>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Film</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-4 mt-5">
                <div class="content">
                    <div class="card" style="width: 18rem;">
                        <div class="card-header">
                            <?php echo $nightmare_bc->title ?>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Regista: <?php echo $nightmare_bc->director ?></li>
                            <li class="list-group-item">Genre: 
                                <?php foreach($nightmare_bc->genres as $genre){ ?>
                                        <span><?php echo $genre  ?></span> 
                                <?php } ?>
                            </li>
                            <li class="list-group-item">Anno: <?php echo $nightmare_bc->year ?></li>
                            <li class="list-group-item">durata: <?php echo $nightmare_bc->length ?></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-4 mt-5">
                <div class="content">
                    <div class="card" style="width: 18rem;">
                        <div class="card-header">
                            <?php echo $hereditary->title ?>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Regista: <?php echo $hereditary->director ?></li>
                            <li class="list-group-item">Genre: 
                                <?php foreach($hereditary->genres as $genre){ ?>
                                        <span><?php echo $genre  ?></span> 
                                <?php } ?>
                            </li>
                            <li class="list-group-item">Anno: <?php echo $hereditary->year ?></li>
                            <li class="list-group-item">durata: <?php echo $hereditary->length ?></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-4 mt-5">
                <div class="content">
                    <div class="card" style="width: 18rem;">
                        <div class="card-header">
                            <?php echo $donnie->title ?>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Regista: <?php echo $donnie->director ?></li>
                            <li class="list-group-item">Genre: 
                                <?php foreach($donnie->genres as $genre){ ?>
                                        <span><?php echo $genre  ?></span> 
                                <?php } ?>
                            </li>
                            <li class="list-group-item">Anno: <?php echo $donnie->year ?></li>
                            <li class="list-group-item">durata: <?php echo $donnie->length ?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>