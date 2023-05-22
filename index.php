<?php

  require_once __DIR__ . '/models/movie.php';

  $movies = [
    new Movie('K-PAX', 'Iain Softley', 'Fantascienza'),
    new Movie('Il Bi e il Ba', 'Maurizio Nichetti', 'Intellettuale'),
    new Movie('Fa\' la cosa giusta', 'Spike Lee', 'Commedia')
  ]
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
    <li><?php echo $movie->getMovieInfo()  ?></li>
  </ <?php endforeach; ?> ul>
</body>
</html>