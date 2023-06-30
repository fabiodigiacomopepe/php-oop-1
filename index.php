<?php

class GenreExtra {
    public $name;

    public function __construct($name) {
        $this -> name = $name;
    }
}

class Movie {
    public $name;
    public $language;
    public $genre;
    public $year;
    public $duration;
    public $genre_extra;

    public function __construct($name, $language, $genre, $year, $duration, GenreExtra ...$genre_extra) {
        $this -> name = $name;
        $this -> language = $language;
        $this -> genre = $genre;
        $this -> year = $year;
        $this -> duration = $duration;
        $this -> genre_extra = $genre_extra;
    }

    public function getFullMovieDetails() {
        return $this -> name . "<br />" .
            $this -> language . "<br />" .
            $this -> genre . "<br />" .
            $this -> year . "<br />" .
            $this -> duration;
    }
}

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

$extra_genre1 = new GenreExtra("Action");
$extra_genre2 = new GenreExtra("Thriller");

$movie1 = new Movie("Kill Bill: Volume 1", "US", "Martial Arts Film", "2003", "111 minuti", $extra_genre1);
$movie2 = new Movie("Catch Me If You Can", "US", "Comedy-drama", "2002", "141 minuti", $extra_genre2);

for ($i=1; $i <= 2; $i++) { 
    $movie = 'movie' . $i;
    echo ${$movie} -> getFullMovieDetails() . "<br />GENERE EXTRA: " . ${$movie} -> genre_extra[0] -> name;
    echo "<br /><br />";
}

// echo $movie1 -> getFullMovieDetails() . "<br />GENERE EXTRA: " . $movie1 -> genre_extra[0] -> name;
// echo "<br /><br />";

// echo $movie2 -> getFullMovieDetails() . "<br />GENERE EXTRA: " . $movie2 -> genre_extra[0] -> name;
// echo "<br /><br />";

var_dump($movie1);
echo "<br /><br />";
var_dump($movie2);