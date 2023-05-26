<?php
include_once ("../koneksi/koneksi.php");

  // Check If form submitted, insert form data into users table.
  $status = $statusMsg = '';
  if(isset($_POST['Submit'])) {
    $status = 'error';
    if(!empty($_FILES["image"]["name"])) {
      $kode_barang = $_POST['kode_barang'];
      $nama_barang = $_POST['nama_barang'];
      $harga = $_POST['harga'];
      $keterangan = $_POST['keterangan'];
      $id_kategori = $_POST['id_kategori'];
      $id_merk = $_POST['id_merk'];

      // Get file info 
      $fileName = basename($_FILES["image"]["name"]); 
      $fileType = pathinfo($fileName, PATHINFO_EXTENSION); 

      // Allow certain file formats 
      $allowTypes = array('jpg','png','jpeg'); 
      if(in_array($fileType, $allowTypes)) {
        $image_tmp = $_FILES['image']['tmp_name']; 
        $imgContent = addslashes(file_get_contents($image_tmp));

        $target_dir = "./uploads/";
        $target_file = $target_dir . basename($_FILES["image"]["name"]);
        $uploadOk = true;
        move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);

        // Insert image content into database 
          $insert = $conn->query("INSERT INTO `barang`(`kode_barang`, `nama_barang` , `harga` , `keterangan` , `id_kategori` , `id_merk`, `image`) VALUES ('$kode_barang','$nama_barang','$harga','$keterangan','$id_kategori','$id_merk','$imgContent')");
          if($insert) {
            $status = 'success'; 
            $statusMsg = "File uploaded successfully."; 
          } else {
            echo"<script>alert('Upload file gagal, Ada data yang belum diisi!');</script>";
          }
      } else {
          echo"<script>alert('Format yang dibolehkan hanya jpg, jpeg, dan png!');window.location='index.php?halaman=tambah';</script>";
        }    
    } else {
        echo"<script>alert('Pilih gambar untuk diupload!');window.location='index.php?halaman=tambah';</script>";
      }
  }
  // Display status message 
  echo"<script>alert('Data Berhasil Ditambahkan!');window.location='index.php?halaman=barang';</script>";
?>


