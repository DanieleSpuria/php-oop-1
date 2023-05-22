<?php 

  require_once __DIR__ . '/genres.php';

  class Movie {
    public $title;
    public $director;
    public $genres;

    public function __construct($_title, $_director, Genres $_genres = null) {
      $this->title = $_title;
      $this->director = $_director;
      $this->genres = $_genres;
    }

    public function getMovieInfo() {
      return 'Il film ' . '<strong>' . $this->title . '</strong>' . ' è stato diretto da ' . '<strong>' .$this->director . '</strong>';
    }
  }
?>