<?php
include_once ("../koneksi/koneksi.php");
$query = mysqli_query($conn, "SELECT * FROM `barang`
INNER JOIN `kategori` ON `barang`.`id_kategori` = `kategori`.`id_kategori`
INNER JOIN `merk` ON `merk`.`id_merk` = `barang`.`id_merk`;"); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Data Barang</title>
  <!-- font awesome -->
  <script src="https://kit.fontawesome.com/e021723377.js" crossorigin="anonymous"></script>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css"/>
  <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>

  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css"/>
</head>
<body>
  <div class="container">
    <h1 style="margin-top: 20px; font-size:20pt; text-align: center; color: #695CFE">List Data Barang</h1>
    <a href="index.php?halaman=tambah" style="text-align: center; margin-top: 20px" class="btn btn-primary"><i class="fa-solid fa-plus"></i> Tambah Data</a>
  </div>

  <div class="container mt-4">
		<table id="tableData" class="table table-striped" style="width:100%">
			<thead>
				<tr>
          <th>No</th>
          <th>Kategori</th>		
          <th>Merk</th>	
					<th>Kode Barang</th>
					<th>Nama Barang</th>
					<th>Harga</th>
          <th>Foto Barang</th>
          <th>Aksi</th>		
				</tr>			
			</thead>
		<tbody>
			<?php if(mysqli_num_rows($query) > 0 ) { 
        $no = 1;
        while($data = mysqli_fetch_array($query)) { ?>
        <tr>
          <td><?php echo $no ?></td>
          <td><?php echo $data["nama_kategori"] ?></td>
          <td><?php echo $data["nama_merk"] ?></td>
					<td><?php echo $data["kode_barang"] ?></td>
					<td><?php echo $data["nama_barang"] ?></td>
					<td>Rp. <?php echo number_format($data['harga'], 2,',','.' ); ?></td>
          <td><img style="width: 100px;" src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($data['image']); ?>"></td>
          <td> 
            <h5><a style="text-decoration:none" href="index.php?halaman=edit&id=<?php echo $data["id"]; ?>"><i class="fa-solid fa-pen-to-square"></i></i></a></h5>
            <h5><a style="text-decoration:none" href="index.php?halaman=delete&id=<?php echo $data["id"]; ?>"onclick="return confirm('Anda yakin mau menghapus item ini ?')"><i class="fa-solid fa-trash" style="color: #dc3545;"></i></i></a></h5>
          </td>
				</tr>
        <?php $no++; } ?>
			<?php } ?>
		</tbody>
		</table>
	</div>
  </div>
</body>
</html>

<script>
  $(document).ready(function () {
    $('#tableData').DataTable();
  });
</script>
