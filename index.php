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
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css' integrity='sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==' crossorigin='anonymous'/>
  <style>
    body {
      text-align: center;
    }
    ul {
      padding: 0;
    }
    li{
      list-style: none;
    }
  </style>
  <title>PHP OOP 1</title>
</head>
<body>
  <div class="container my-5">
    <h1 class="m-3">MOVIE</h1>
  
    <!-- <?php foreach($movies as $movie) : ?>
      <ul>
        <li><?php echo $movie->getMovieInfo() . ' ' . $movie->genres->getGenresInfo() ?>;</li>
      </ul>
    <?php endforeach; ?> -->

    <div class="row">
      <?php foreach($movies as $movie) : ?>
        <div class="col-4">
          <img class="h-100" src="./img/<?php echo $movie->cover ?>" alt="Cover">
          <span class="d-block my-2"><?php echo $movie->getMovieInfo() ?></span>
          <span><?php echo $movie->genres->getGenresInfo() ?></span>
        </div   >
      <?php endforeach; ?>
    </div>
  </div>
</body>
</html>