<?php
include "../koneksi/koneksi.php";
$query = $conn->query("SELECT * FROM merk WHERE id_merk='$_GET[id]'");
$data = $query->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Merk</title>
</head>
<body>
  <div class="container">
    <h1 style="margin-top: 20px; font-size:20pt; text-align: center; color: #695CFE">Edit Data Merk</h1>
    <form method="post" enctype="multipart/form-data">
      <div class="form-group">
        <label>Nama Merk</label>
        <input type="text" style="margin-top:10px;" class="form-control" name="nama_merk" value="<?php echo $data['nama_merk']; ?>" required>
      </div>
      <button class="btn btn-primary" style="margin-top:15px;" name="ubah">Simpan Perubahan</button>
    </form>
  
  <?php
  if (isset($_POST['ubah'])) {
    $conn->query("UPDATE merk SET nama_merk='$_POST[nama_merk]' WHERE id_merk='$_GET[id]'");
    echo"<script>alert('Data Berhasil Ditambahkan!');window.location='index.php?halaman=merk';</script>";
    }
  ?>
  </div>
</body>
</html>

