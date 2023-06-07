<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <script src="main.js"></script>
    <title>TheSquadGame</title>
    
</head>
<body>
<?php echo $_SESSION['site'] ?>
<header class="p-3">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <p class="h4">Squad</p>
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
          <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
        </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a class="nav-item nav-link" href="index.php">Home</a></li>
          <li><a class="nav-item nav-link" href="aboutus.php">About Us</a></li>
          <li><a class="nav-item nav-link" href="download.php">Download</a></li>
        </ul>
        
        <div class="text-end">
          <a class="btn btn-outline-light me-2" href="login.php">Login</a>
        </div>
      </div>
    </div>
  </header>

  <div class="p-3 text-center">
  <h1>Home</h1>
  <p class="h4">Welcome to the official Squad game website</p>
  </div>

  <div class="container justify-content-center text-center">
    <h2>Joke of the Day</h2>
    <p id="text" class="h4">LOL</p>
  </div>

  <div class="p-3 text-center">
    <h2>About Game</h2>
    <p>In this 2D topdown shooter the player will experience difficult challanges, but also cool story, throughout game's 3 different levels.</p>
  </div>

<div class="p-3 text-center">
  <h2>Preview</h2>
  <div id="carouselCaptions" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/image2.png" class="d-block w-100" alt="..." width='500' height='500'>
      <div class="carousel-caption d-none d-md-block">
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/image.png" class="d-block w-100" alt="..." width='500' height='500'>
      <div class="carousel-caption d-none d-md-block">
      </div>
    </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>

  <footer class="py-3 my-4">
    <p class="text-center">© 2023 Jan Jakub Zábranský</p>
  </footer>
</body>
</html>