<?php
include "../koneksi/koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Merk</title>
</head>
<body>
    <div class="container">
        <h1 style="margin-top: 20px; font-size:20pt; text-align: center; color: #695CFE">List Data Merk</h1>
        <a style="margin-bottom:-25px;" href="index.php?halaman=tambah_merk" class="btn btn-primary">+ Tambah Merk</a>
        <table class="table table-bordered" style="margin-top: 40px;">
        <tread>
            <tr>
                <th>No</th>
                <th>Nama Merk</th>
                <th>Aksi</th>
            </tr>
        </tread>
        <tbody>
            <?php $no=1; ?>
            <?php $query=$conn->query("SELECT * FROM merk ORDER BY nama_merk ASC"); ?>
            <?php while($data = $query->fetch_assoc()){?>
                <tr>
                    <td><?php echo $no; ?></td>
                    <td><?php echo $data['nama_merk']; ?></td>
                    <td>
                        <a class="btn btn-success" href="index.php?halaman=edit_merk&id=<?php echo $data['id_merk']; ?>">Ubah</a>
                        <a class="btn btn-danger" href="index.php?halaman=delete_merk&id=<?php echo $data['id_merk']; ?>"onclick="return confirm('Anda yakin mau menghapus item ini ?')">Hapus</a>
                </tr>
            <?php $no++; ?>
            <?php } ?>
        </tbody>
        </table>
    </div>
</body>
</html>