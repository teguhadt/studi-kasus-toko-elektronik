<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Data Admin | Teguh Shop</title>
    <link rel="stylesheet" href="../barang/css/style.css" />
    <!-- font awesome -->
    <script src="https://kit.fontawesome.com/e021723377.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>

  <body>
    <!-- Sidebar -->
    <div class="sidebar">
      <h2><i class="fa-solid fa-cart-shopping" style="color: #ffffff"></i> Teguh Shop</h2>
      <ul class="nav">
        <li>
          <a style="text-decoration:none" href="index.php?halaman=home">
            <i class="fa-solid fa-house"></i>
            <span>Home</span>
          </a>
        </li>
        <li>
          <a style="text-decoration:none" href="index.php?halaman=barang">
            <i class="fa-solid fa-screwdriver-wrench"></i>
            <span>Data Barang</span>
          </a>
        </li>
        <li>
          <a style="text-decoration:none" href="index.php?halaman=kategori">
            <i class="fas fa-server"></i>
            <span>Data Kategori</span>
          </a>
        </li>
        <li>
          <a style="text-decoration:none" href="index.php?halaman=merk">
            <i class="fas fa-concierge-bell"></i>
            <span>Data Merk</span>
          </a>
        </li>
        <li>
          <a style="text-decoration:none" href="../index.php">
            <i class="fa-solid fa-arrow-left"></i>
            <span>Katalog</span>
          </a>
        </li>
      </ul>
    </div>

    <div class="main">
      <?php
      if (isset($_GET['halaman'])) {
        if ($_GET['halaman']=="home") {
          include 'home.php';
        } else if ($_GET['halaman']=="barang") {
          include 'barang.php';
        } else if ($_GET['halaman']=="tambah") {
          include 'tambah.php';
        } else if ($_GET['halaman']=="edit") {
          include 'edit.php';
        } else if ($_GET['halaman']=="delete") {
          include 'delete.php';
        } else if ($_GET['halaman']=="kategori") {
          include 'kategori.php';
        } else if ($_GET['halaman']=="tambah_kategori") {
          include 'tambah_kategori.php';
        } else if ($_GET['halaman']=="edit_kategori") {
          include 'edit_kategori.php';
        } else if ($_GET['halaman']=="delete_kategori") {
          include 'delete_kategori.php';
        } else if ($_GET['halaman']=="merk") {
          include 'merk.php';
        } else if ($_GET['halaman']=="tambah_merk") {
          include 'tambah_merk.php';
        } else if ($_GET['halaman']=="edit_merk") {
          include 'edit_merk.php';
        } else if ($_GET['halaman']=="delete_merk") {
          include 'delete_merk.php';
        }
      } else {
        include 'home.php';
      }
      ?>
    </div>

  </body>
</html>