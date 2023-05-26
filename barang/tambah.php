<?php
// include database connection file
include_once ("../koneksi/koneksi.php");
?>
<html>
  <head>
    <title>Tambah Data</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- javascript -->
    <script type="text/javascript" src="js/jquery-1.2.3.pack.js"></script>
    <script type="text/javascript" src="js/jquery.validate.pack.js"></script>
    <style type="text/css">
      input.error, select.error { border: 1px solid red; }
      label.error { color:red;  }
    </style>
  </head>

<body>
  <div class="container mt-4">
    <h1 style="margin-top: 20px; font-size:20pt; text-align: center; color: #695CFE">Tambah Data Baru</h1>
    <form action="proses_tambah.php" form id="addform" method="post" enctype="multipart/form-data" style="margin-top: 20px;">
      <table cellpadding ="10" cellspacing="0" class= "table table-striped">
        <tr> 
          <td>Kategori</td>
          <td><select id="kategori" class="form-select" aria-label="Kategori" name="id_kategori" required>
            <option disabled selected value="">Pilih Kategori</option>
            <?php
            $query = $conn->query("SELECT * FROM kategori");
            while($data = $query->fetch_assoc()) {
              ?>
              <option value="<?=$data['id_kategori'];?>"><?php echo $data['nama_kategori'];?></option>
              <?php
            } ?>
          </select></td>
        </tr>
        <tr> 
          <td>Merk</td>
          <td><select id="merk" name="id_merk" class="form-select" aria-label="merk" required>
            <option disabled selected value="">Pilih Merk</option>
            <?php 
            $query = $conn->query("SELECT * FROM merk");
            while($data = $query->fetch_assoc()) {
              ?>
              <option value="<?=$data['id_merk'];?>"><?php echo $data['nama_merk'];?></option>
              <?php
            } ?>
          </select></td>
        </tr>
        <tr>
          <tr> 
            <td>Kode Barang</td>
            <td><input type="text" name="kode_barang" class="form-control required" placeholder="Kode Barang" title="Kode Barang harus diisi"></td>
          </tr>
          <tr>
            <td>Nama Barang</td>
            <td><input type="text" name="nama_barang" class="form-control required" placeholder="Nama Barang" title="Nama Barang harus diisi"></td>
          </tr>
          <tr> 
            <td>Harga</td>
            <td><input type="text" name="harga" class="form-control required" placeholder="xxxxxxx" title="Harga harus diisi"></td>
          </tr>
          <tr> 
            <td>Keterangan</td>
            <td><textarea name="keterangan" style="resize: none;" class="form-control required" placeholder="Keterangan" title="Keterangan harus diisi" rows="5"></textarea></td>
          </tr> 
          <tr> 
            <td>Foto Barang</td>
            <td><input type="file" name="image" class="form-control">
            <p style="color: #695CFE; padding-top: 5px">Ekstensi yang diperbolehkan .png | .jpg | .jpeg </p>
            </td>
          </tr>
          <td></td>
          <td>
            <input type="submit" name="Submit" value="Submit" class="btn btn-primary">
          </td>
          </tr>
      </table>
    </form>
  </div>

</body>
</html>
<script type="text/javascript">
$(document).ready(function() {
	$("#addform").validate();
})
</script>
