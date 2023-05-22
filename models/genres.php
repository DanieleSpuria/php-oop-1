<?php 

  class Genres {
    public $genre1;
    public $genre2;

    public function __construct($_genre1, $_genre2) {
      $this->genre1 = $_genre1;
      $this->genre2 = $_genre2;
    }

    public function getGenresInfo() {
      return '( ' . $this->genre1 . ', ' . $this->genre2 . ' )';
    }
  }
?>