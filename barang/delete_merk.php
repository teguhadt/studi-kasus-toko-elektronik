<?php  
include "../koneksi/koneksi.php";

$query = $conn->query("SELECT * FROM merk WHERE id_merk='$_GET[id]'");
$data = $query->fetch_assoc();
$conn->query("DELETE FROM merk WHERE id_merk='$_GET[id]'");

echo"<script>alert('Data Berhasil Dihapus!');window.location='index.php?halaman=merk';</script>";

?> 