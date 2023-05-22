<?php

  require_once __DIR__ . '/models/movie.php';

  $movies = [
    new Movie('K-PAX', 'Iain Softley', new Genres('Fantascienza', 'Drammatico')),
    new Movie('Il Bi e il Ba', 'Maurizio Nichetti', new Genres('Intellettuale', 'Drammatico')),
    new Movie('Fa\' la cosa giusta', 'Spike Lee', new Genres('Commedia', 'Drammatico'))
  ];
  
?>