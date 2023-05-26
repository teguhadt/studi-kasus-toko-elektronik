<?php
include 'koneksi/koneksi.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Katalog | Teguh Shop</title>
    
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!-- js -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <!-- font awesome -->
    <script src="https://kit.fontawesome.com/e021723377.js" crossorigin="anonymous"></script>
  </head>

  <body>
    <?php include 'menu.php' ?>;

    <!-- list grup -->
    <div class="row mt-4 no-gutters">
      <div class="col-md-2 bg-light">
        <ul class="list-group list-group-flush p-2 pt-4">
          <li class="list-group-item" style="background-color: #695CFE;><i class="fas fa-list"></i> Kategori Produk</li>
          <?php $query = $conn->query("SELECT * FROM kategori order by nama_kategori asc"); ?>
          <?php while($data = $query->fetch_assoc()){ ?>
          <li class="list-group-item"><i class="fas fa-angle-right"></i> <?php echo $data["nama_kategori"] ?></li>
          <?php } ?>
        </ul>
      </div>

    <!-- carousel -->
    <div class="col-md-10">
      <div id="carouselExampleIndicators" class="carousel slide">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/slide/slide1.jpg" class="d-block img-fluid w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img/slide/slide2.jpg" class="d-block img-fluid w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img/slide/slide3.jpg" class="d-block img-fluid w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
          </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

      <h4 class="text-center font-weight-bold m-4">Rekomendasi</h4>
      <!-- card catalog -->
      <div class="row ms-5">
      <?php $query = $conn->query("SELECT * FROM barang"); ?>
      <?php while($data = $query->fetch_assoc()){ ?>
        <div class="card me-4 ms-4 mb-4" style="width: 17rem;">
          <img class="card-img-top" alt="gambar" src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($data['image']); ?>">
            <div class="card-body bg-light">
              <h5 class="card-title"><?php echo $data['nama_barang']; ?></h5>
              <p class="card-text">Rp. <?php echo number_format($data['harga'], 2,',','.' ); ?></p>
              <!-- Button trigger modal -->
              <button type="button" class="userinfo btn btn-primary" data-bs-toggle="modal" data-id="<?php echo $data['id']; ?>" data-bs-target="#modalViewData">
                Detail
              </button>
        </div>
      </div>
      <?php } ?>

      <!-- content modal -->
      <script type='text/javascript'>
        $(document).ready(function(){
          $('.userinfo').click(function(){
            var userid = $(this).data('id'); 
              $.ajax({
              url: 'ajaxfile.php',
              type: 'post',
              data: {userid: userid},
              success: function(response){ 
                $('.modal-body').html(response); 
                $('#empModal').modal('show'); 
              }
            });
          });
        });
      </script>

      <!-- modal detail -->
      <div class="modal fade" id="empModal" role="dialog">
        <div class="modal-dialog  modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Detail Barang</h4>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
              <div class="modal-body">

              </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
          </div>
        </div>
      </div>

      </div>

      </div>
    </div>

    <?php include 'footer.php' ?>;
    
  </body>
</html>