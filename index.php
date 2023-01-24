<?php
    class Movie {

        public $title;
        public $genre;
        public $author;
        public $releaseYear;

        public function __construct($title, $genre, $author, $releaseYear){

            $this -> title = $title;
            $this -> genre = $genre;
            $this -> author = $author;
            $this -> releaseYear = $releaseYear;
        }

        public function buildHtml(){
            echo '<h1>Movie: ' . $this -> title . '</h1>'
                . '<p>' . $this -> genre . '</p>'
                . '<p>' . $this -> author. '</p>'
                . '<p>' . $this -> releaseYear . '</p>';
        }
    }

    $movie1 = new Movie('Il gigante di ferro', 'Animazione', 'Brad Bird', '1999');
    $movie2 = new Movie('Alien' , 'Fantascienza', 'Ridley Scott', '1979');
    $movie3 = new Movie('La Casa', 'Horror', 'Sam Raimi', '1981');
    $movie4 = new Movie('Big Fish - Le storie di una vita incredibile', 'Fantastico', 'Tim Burton', '2003');

    echo $movie1 -> buildHtml();
    echo $movie2 -> buildHtml();
    echo $movie3 -> buildHtml();
    echo $movie4 -> buildHtml();

?>