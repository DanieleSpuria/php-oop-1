<?php

  require_once __DIR__ . '/models/movie.php';

  $movies = [
    new Movie('k-pax.jpeg','K-PAX', 'Iain Softley', new Genres('Fantascienza', 'Drammatico')),
    new Movie('biba.jpeg', 'Il Bi e il Ba', 'Maurizio Nichetti', new Genres('Intellettuale', 'Drammatico')),
    new Movie('cosa-giusta.jpg', 'Fa\' la cosa giusta', 'Spike Lee', new Genres('Commedia', 'Drammatico'))
  ];

?>