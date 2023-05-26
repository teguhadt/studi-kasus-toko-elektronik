<?php
include "../koneksi/koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kategori</title>
</head>
<body>
    <div class="container">
        <h1 style="margin-top: 20px; font-size:20pt; text-align: center; color: #695CFE">List Data Kategori</h1>
        <a style="margin-bottom:-25px;" href="index.php?halaman=tambah_kategori" class="btn btn-primary">+ Tambah Kategori</a>
        <table class="table table-bordered" style="margin-top: 40px;">
        <tread>
            <tr>
                <th>No</th>
                <th>Nama Kategori</th>
                <th>Aksi</th>
            </tr>
        </tread>
        <tbody>
            <?php $no=1; ?>
            <?php $query=$conn->query("SELECT * FROM kategori ORDER BY nama_kategori ASC"); ?>
            <?php while($data = $query->fetch_assoc()){?>
                <tr>
                    <td><?php echo $no; ?></td>
                    <td><?php echo $data['nama_kategori']; ?></td>
                    <td>
                        <a class="btn btn-success" href="index.php?halaman=edit_kategori&id=<?php echo $data['id_kategori']; ?>">Ubah</a>
                        <a class="btn btn-danger" href="index.php?halaman=delete_kategori&id=<?php echo $data['id_kategori']; ?>"onclick="return confirm('Anda yakin mau menghapus item ini ?')">Hapus</a>
                </tr>
            <?php $no++; ?>
            <?php } ?>
        </tbody>
        </table>
    </div>
</body>
</html>