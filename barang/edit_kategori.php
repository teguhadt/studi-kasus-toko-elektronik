<?php
include "../koneksi/koneksi.php";
$query = $conn->query("SELECT * FROM kategori WHERE id_kategori='$_GET[id]'");
$data = $query->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Kategori</title>
</head>
<body>
  <div class="container">
    <h1 style="margin-top: 20px; font-size:20pt; text-align: center; color: #695CFE">Edit Data Kategori</h1>
    <form method="post" enctype="multipart/form-data">
      <div class="form-group">
        <label>Nama Kategori</label>
        <input type="text" style="margin-top:10px;" class="form-control" name="nama_kategori" value="<?php echo $data['nama_kategori']; ?>" required>
      </div>
      <button class="btn btn-primary" style="margin-top:15px;" name="ubah">Simpan Perubahan</button>
    </form>
  
  <?php
  if (isset($_POST['ubah'])) {
    $conn->query("UPDATE kategori SET nama_kategori='$_POST[nama_kategori]' WHERE id_kategori='$_GET[id]'");
    echo"<script>alert('Data Berhasil Ditambahkan!');window.location='index.php?halaman=kategori';</script>";
    }
  ?>
  </div>
</body>
</html>

