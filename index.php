<?php

  // require_once __DIR__ . '/models/movie.php';

  // $movies = [
  //   new Movie('K-PAX', 'Iain Softley', new Genres('Fantascienza', 'Drammatico')),
  //   new Movie('Il Bi e il Ba', 'Maurizio Nichetti', new Genres('Intellettuale', 'Drammatico')),
  //   new Movie('Fa\' la cosa giusta', 'Spike Lee', new Genres('Commedia', 'Drammatico'))
  // ]

  // BONUS 2
  require_once __DIR__ . '/db.php';
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP OOP 1</title>
</head>
<body>
  <h1>MOVIE</h1>

  <ul <?php foreach($movies as $movie) : ?> >
    <li><?php echo $movie->getMovieInfo() . ' ' . $movie->genres->getGenresInfo() ?>;</li>
  </ <?php endforeach; ?> ul>
</body>
</html>