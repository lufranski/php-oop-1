<?php
    
    class Genre {

        public $genreName;

        public function __construct($genreName){

            $this -> genreName = $genreName;
        }
    }
    
    class Movie {

        public $title;
        public array $genres;
        public $author;
        public $releaseYear;

        public function __construct($title, $genres, $author, $releaseYear){

            $this -> title = $title;
            $this -> genres = $genres;
            $this -> author = $author;
            $this -> releaseYear = $releaseYear;
        }

        public function getFullGenres(){

            $string = '';

            foreach($this -> genres as $genre){

                $string .= $genre -> genreName . ' ';
            }

            return $string;
        }

        public function buildHtml(){
            echo '<h1>Movie: ' . $this -> title . '</h1>'
                . '<p>' . $this -> getFullGenres() . '</p>'
                . '<p>' . $this -> author. '</p>'
                . '<p>' . $this -> releaseYear . '</p>';
            }
            
            
    }
        
    $genres1 = [new Genre('Animazione'), new Genre('Commedia'), new Genre('Avventura'), new Genre('Fantascienza'), new Genre('Drammatico')];
    $genres2 = [new Genre('Fantascienza'), new Genre('Thriller'), new Genre('Horror'), new Genre('Azione')];
    $genres3 = [new Genre('Avventura'), new Genre('Azione'), new Genre('Commedia'), new Genre('Fantascienza'), new Genre('Horror')];
    $genres4 = [new Genre('Fantastico'), new Genre('Drammatico'), new Genre('Avventura')];

    $movies = [new Movie('Il gigante di ferro', $genres1, 'Brad Bird', '1999'), new Movie('Alien' , $genres2, 'Ridley Scott', '1979'), new Movie("L'armata delle tenebre", $genres3, 'Sam Raimi', '1992'), new Movie('Big Fish - Le storie di una vita incredibile', $genres4, 'Tim Burton', '2003')];

    foreach($movies as $movie){
        
         echo $movie -> buildHtml(); 
    }

?>