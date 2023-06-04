<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <title>TheSquadGame</title>
    
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
          <li><a class="nav-item nav-link " href="/">Home</a></li>
          <li><a class="nav-item nav-link<?= $_SESSION["site"] === "/views/aboutus.php" ? "active" : "" ?>" href="/views/aboutus">About Us</a></li>
          <li><a class="nav-item nav-link<?= $_SESSION["site"] === "/views/download.php" ? "active" : "" ?>" href="/views/download">Download</a></li>
        </ul>
        
        <div class="text-end">
          <a class="btn btn-outline-light me-2" href="/views/login">Login</a>
        </div>
      </div>
    </div>
  </header>