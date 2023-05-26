<?php include 'koneksi/koneksi.php'; ?>
<?php
$keyword = $_GET["keyword"];

$semuadata = array();
$query = $conn->query("SELECT * FROM barang WHERE nama_barang LIKE '%$keyword%'");
while ($data = $query->fetch_assoc()) 
{
    $semuadata[]=$data;
}

//echo "<pre>";
//print_r($semuadata);
//echo "</pre>";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Pencarian</title>
    <link rel="icon"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    <?php include 'menu.php' ?>
    <div style="padding-top: 25px;" class="container mt-5">
        <h3>Hasil Pencarian : '<?php echo $keyword ?>'</h3>

        <?php if (empty($semuadata)): ?>
            <div class="alert alert-danger">Barang <strong><?php echo $keyword ?></strong> tidak ditemukan</div>
        <?php endif ?>

        <div class="row">

            <?php foreach ($semuadata as $key => $value): ?>
            <div class="col-md-3">
                <div class="thumbnail">
                    <img class="card-img-top" alt="gambar" src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($value['image']); ?>">
                    <div class="caption">
                        <h5 class="card-title"><?php echo $value['nama_barang']; ?></h5>
                        <p class="card-text">Rp. <?php echo number_format($value['harga'], 2,',','.' ); ?></p>
                        <button type="button" class="userinfo btn btn-primary" data-bs-toggle="modal" data-id="<?php echo $value['id']; ?>" data-bs-target="#modalViewData">
                            Detail
                        </button>
                    </div>
                </div>
            </div>
            <?php endforeach ?>
        </div>
        </div>

    </div>
</body>
</html>