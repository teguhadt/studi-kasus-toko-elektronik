<?php
include "../koneksi/koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Merk Baru</title>
</head>
<body>
  <h1 style="margin-top: 20px; font-size:20pt; text-align: center; color: #695CFE">Tambah Data Merk</h1>
  <div class="container">
    <form method="post" enctype="multipart/form-data">
      <div class="form-group">
        <label>Nama Merk</label>
        <input type="text" style="margin-top:10px;" class="form-control" name="nama_merk" required>
      </div>
      <button class="btn btn-primary" style="margin-top:15px;" name="save">Simpan</button>
    </form>
  <?php
  if (isset($_POST['save'])) {
    $conn->query("INSERT INTO merk (nama_merk) VALUES ('$_POST[nama_merk]')");
    echo"<script>alert('Data Berhasil Ditambahkan!');window.location='index.php?halaman=merk';</script>";
    }
  ?>
  </div>
</body>
</html>