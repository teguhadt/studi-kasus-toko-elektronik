<?php
include "koneksi/koneksi.php";
$userid = $_POST['userid'];
$query = mysqli_query($conn, "SELECT * FROM `barang`
INNER JOIN `kategori` ON `barang`.`id_kategori` = `kategori`.`id_kategori`
INNER JOIN `merk` ON `merk`.`id_merk` = `barang`.`id_merk`
WHERE id='$userid'"); 
?>

<div class="row">
    <?php while($data = mysqli_fetch_array($query)) { ?>
    <div class="col-md-6"><img style="width: 350px; height: auto" src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($data['image']); ?>"></div>
    <div class="col-md-6">
        <table class="table table-borderless">
            <tr>
                <th>Kategori</th>
                <td><?php echo $data["nama_kategori"] ?></td>
            </tr>
            <tr>
                <th>Merk</th>
                <td><?php echo $data["nama_merk"] ?></td>
            </tr>
            <tr>
                <th>Kode Barang</th>
                <td><?php echo $data["kode_barang"] ?></td>
            </tr>
            <tr>
                <th>Nama</th>
                <td><?php echo $data["nama_barang"] ?></td>
            </tr>
            <tr>
                <th>Harga</th>
                <td>Rp. <?php echo number_format($data['harga'], 2,',','.' ); ?></td>
            </tr>
            <tr>
                <th>Keterangan</th>
                <td><?php echo $data["keterangan"] ?></td>
            </tr>
        </table>
    </div>
    <?php } ?>
</div>