<?php 
  require_once __DIR__ . "/db.php";
  require_once __DIR__ . "/Movie.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <title>php-oop-1</title>

  <style>
    body {
      font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
    }
    .ac-container {
      padding: 50px 0;
    }
    h3 {
      font-size: 24px;
      padding: 10px 0;
    }
    h1 {
      border-bottom: 1px solid black;
    }
    h3:first-of-type {
      padding-top: 5px;
    }
    .movie {
      margin: 20px 0;
      padding: 5px 10px;
      border-bottom: 2px solid cornflowerblue;
    }
  </style>
</head>
<body>
  <div class="container ac-container">
      <h1>Movies</h1>
      <?php
        foreach ($movies as $movie) :
          $newMovie = new Movie($movie['title'], $movie['director']);
          $newMovie->originalTitle = $movie['originalTitle'];
          $newMovie->overview = $movie['overview'];
      ?>
        <div class="movie">
          <h3>Titolo:</h3> <span> <?php echo $newMovie->title ?> </span>
          <h3>Titolo Originale:</h3> <span> <?php echo $newMovie->originalTitle ?> </span>
          <h3>Regia:</h3> <span> <?php echo $newMovie->director ?> </span>
          <h3>Trama:</h3> <span> <?php echo $newMovie->getExceptedOverview($newMovie->overview) ?> </span>
        </div>
      <?php endforeach; ?>
  </div>
</body>
</html>