<?php 

  class Movie {
    public $title;
    public $director;
    public $genre;

    public function __construct($_title, $_director, $_genre) {
      $this->title = $_title;
      $this->director = $_director;
      $this->genre = $_genre;
    }
  }
?>