<?php  
include "../koneksi/koneksi.php";

$query = $conn->query("SELECT * FROM kategori WHERE id_kategori='$_GET[id]'");
$data = $query->fetch_assoc();
$conn->query("DELETE FROM kategori WHERE id_kategori='$_GET[id]'");

echo"<script>alert('Data Berhasil Dihapus!');window.location='index.php?halaman=kategori';</script>";

?> 