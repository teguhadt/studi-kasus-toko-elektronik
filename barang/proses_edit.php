<?php
include_once ("../koneksi/koneksi.php");

$status = $statusMsg = '';
if(isset($_POST['submit'])) {
  $status = 'error';
  $id = $_GET["id"];
  if(!empty($_FILES["image"]["name"])) {
    $kode_barang = $_POST['kode_barang'];
    $nama_barang = $_POST['nama_barang'];
    $harga = $_POST['harga'];
    $keterangan = $_POST['keterangan'];
    $id_kategori = $_POST['id_kategori'];
    $id_merk = $_POST['id_merk'];

    $fileName = basename($_FILES["image"]["name"]); 
    $fileType = pathinfo($fileName, PATHINFO_EXTENSION); 

    $allowTypes = array('jpg','png','jpeg'); 
    if(in_array($fileType, $allowTypes)) {
      $image_tmp = $_FILES['image']['tmp_name']; 
      $imgContent = addslashes(file_get_contents($image_tmp)); 

      $target_dir = "./uploads/";
      $target_file = $target_dir . basename($_FILES["image"]["name"]);
      $uploadOk = true;
      move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);

      $result = mysqli_query($conn, "UPDATE `barang` SET kode_barang='$kode_barang',nama_barang='$nama_barang',harga='$harga',keterangan='$keterangan',id_kategori='$id_kategori',id_merk='$id_merk',image='$imgContent' WHERE id='$id';");
      if($result) {
        $status = 'success'; 
        $statusMsg = "File uploaded successfully."; 
      } else {
        echo"<script>alert('Upload file gagal, coba lagi!');</script>";
      }
    } else {
      echo"<script>alert('Format yang dibolehkan hanya jpg, jpeg, dan png!');window.location='index.php?halaman=edit';</script>";
    }
  } else {
    echo"<script>alert('Ada Data yang belum diisi!');window.location='index.php?halaman=edit';</script>";
  }
}

// Display status message 
echo"<script>alert('Data Berhasil Diedit!');window.location='index.php?halaman=barang';</script>";
?>