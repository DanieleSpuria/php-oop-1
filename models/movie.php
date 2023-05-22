<?php 

  require_once __DIR__ . '/genres.php';

  class Movie {
    public $cover;
    public $title;
    public $director;
    public $genres;

    public function __construct($_cover, $_title, $_director, Genres $_genres = null) {
      $this->cover = $_cover;
      $this->title = $_title;
      $this->director = $_director;
      $this->genres = $_genres;
    }

    public function getMovieInfo() {
      return 'Film: ' . '<strong>' . $this->title . '</strong>' . ' Regista: ' . '<strong>' .$this->director . '</strong>';
    }
  }
  
?>