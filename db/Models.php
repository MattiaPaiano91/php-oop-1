<?php

class Movie {
    private $movieTitle;
    private $movieGenre;
    private $actors;
    public function __construct(string $name, string $genre, array $actors = []) {
        $this->movieTitle = $name;
        $this->movieGenre = $genre;
        $this->actors = $actors;
    }
    public function getMovieInfo() {
        return $this->movieTitle.' '. $this->movieGenre;
    }
    
}
$Movie1 = new Movie('fantozzi','commedia');
$Movie2 = new Movie('rambo','azione');   

var_dump($Movie1->getMovieInfo());
var_dump($Movie2->getMovieInfo());