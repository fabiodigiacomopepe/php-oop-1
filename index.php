<?php

class Movie {

    public $name;
    public $language;
    public $genre;
    public $year;
    public $duration;

    public function __construct($name, $language, $genre, $year, $duration) {

        $this -> name = $name;
        $this -> language = $language;
        $this -> genre = $genre;
        $this -> year = $year;
        $this -> duration = $duration;
    }

    public function getFullMovieDetails() {

        echo $this -> name . "<br />" .
            $this -> language . "<br />" .
            $this -> genre . "<br />" .
            $this -> year . "<br />" .
            $this -> duration;
    }
}

$movie1 = new Movie("Kill Bill: Volume 1", "US", "Martial Arts Film", "2003", "111 minuti");

$movie2 = new Movie("Catch Me If You Can", "US", "Comedy-drama", "2002", "141 minuti");

// echo $movie1 -> name . "<br />" .
//     $movie1 -> language . "<br />" .
//     $movie1 -> genre . "<br />" .
//     $movie1 -> year . "<br />" .
//     $movie1 -> duration . "<br />";

// echo "<br />";

// echo $movie2 -> name . "<br />" .
    // $movie2 -> language . "<br />" .
    // $movie2 -> genre . "<br />" .
    // $movie2 -> year . "<br />" .
    // $movie2 -> duration . "<br />";

$movie1 -> getFullMovieDetails();
echo "<br /><br />";
$movie2 -> getFullMovieDetails();
