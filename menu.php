<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Menu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg fixed-top" style="background-color: #695CFE;">
      <div class="container">
        <h3><a href="index.php"><i class="fa-solid fa-cart-shopping me-2 pt-2" style="color: #ffffff"></i></h3>
        <a class="navbar-brand fw-bold text-light" href="index.php">Teguh Shop</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto me-4 mb-2 mb-lg-0">

            <form role="form" action="cari.php" method="get" class="d-flex" style="margin-right: 160px" role="search">
              <input class="form-control me-2" type="search" name="keyword" placeholder="Cari Barang" aria-label="Search" required>
              <button class="btn btn-outline-light" type="submit">Search</button>
            </form>

            <li class="nav-item">
              <a class="nav-link active text-light" aria-current="page" href="index.php"><i class="fa-solid fa-house"></i> Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active text-light" aria-current="page" href="barang/index.php?halaman=home"><i class="fas fa-server"></i> Data</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active text-light" aria-current="page" href="about.php"><i class="fa-solid fa-user"></i> About</a>
            </li>
          </ul>
          
        </div>
      </div>
    </nav>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>