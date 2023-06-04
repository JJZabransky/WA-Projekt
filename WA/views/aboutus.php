<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <title>SquadTheGame</title>
</head>
<body>
<?php echo $_SESSION['site'] ?>
<header class="p-3 text-bg-dark">
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

  <div class="p-3">
  <h1>About Us</h1>
  </div>

  <div class="p-3">
    
  </div>

  <footer class="py-3 my-4">
    <ul class="nav justify-content-center border-bottom pb-3 mb-3">
      <li class="nav-item"><a href="index.php" class="nav-link px-2 text-body-secondary">Home</a></li>
      <li class="nav-item"><a href="aboutus.php" class="nav-link px-2 text-body-secondary">About Us</a></li>
      <li class="nav-item"><a href="download.php" class="nav-link px-2 text-body-secondary">Download</a></li>
    </ul>
    <p class="text-center text-body-secondary">© 2023 Jan Jakub Zábranský</p>
  </footer>
</body>
</html>