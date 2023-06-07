<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <title>SquadTheGame</title>
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
  <h1>Download</h1>
  </div>

  <div class="p-3 m-3 text-center">
    <p class="h4 p-5">↓Download our game HERE!↓</p>
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Modal">Download newest version</button>

<div class="modal fade" id="Modal" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="ModalLabel">Select Platform:</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <button type="button" class="btn btn-warning">Windows</button>
        <button type="button" class="btn btn-warning">Linux</button>
        <button type="button" class="btn btn-warning">MacOS</button>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
  </div>

<div class="p-3">
    <h2>Patch Notes</h2>
    <p>The game is being updated regularly, so dont forget to return for newest version!</p>
</div>

<footer class="py-3 my-4">
    <p class="text-center">© 2023 Jan Jakub Zábranský</p>
  </footer>
</body>
</html>