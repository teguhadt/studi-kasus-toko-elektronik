<?php
// include database connection file
include "../koneksi/koneksi.php";

// Get id from URL to delete that user
$id = $_GET['id'];

// Delete user row from table based on given id
$result = mysqli_query($conn, "DELETE FROM barang WHERE id=$id");

// After delete redirect to Home, so that latest user list will be displayed.
echo"<script>alert('Data Berhasil Dihapus!');window.location='index.php?halaman=barang';</script>";

?>