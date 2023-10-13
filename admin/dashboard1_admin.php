<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Read</title>
    <link rel="icon" href="../assets/gambar/icon.png" type="image/png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<!--Awal Navbar-->
<nav class="navbar navbar-expand-lg bg-dark navbar-dark">
  <div class="container-fluid m-2">
    <a class="navbar-brand" href="#">Ali Khatami</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item mx-3">
          <a class="nav-link active" href="produk_array.php">Home</a>
        </li>
        <li class="nav-item mx-3">
          <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Logout
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!--Akhir navbar-->


<!-- Awal Card -->
<div class="container mt-5 mb-5" id="card-materi">
    <a class="btn btn-primary mb-5" href="tambah.php" role="button">Tambah Data</a>
    <div class="row g-4">
        <?php
        include 'koneksi.php';
        $no = 1;
        $data = mysqli_query($conn, "select * from products");
        while ($d = mysqli_fetch_array($data)) {
            $kategori_id = $d["category_id"];
            $nama_kategori = '';

            switch ($kategori_id) {
                case 1:
                    $nama_kategori = "Sports";
                    break;
                case 2:
                    $nama_kategori = "Accesoris";
                    break;
                case 3:
                    $nama_kategori = "Daily";
                    break;
                default:
                    $nama_kategori = "Tidak Diketahui";
                    break;
            }
        ?>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="card">
                    <img src="<?= $d["image"]; ?>" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title"><?= $d["product_name"]; ?></h5>
                        <p class="card-text"><?= $d["description"]; ?></p>
                        <p class="card-text">Kategori: <?= $nama_kategori; ?></p>
                        <p class="card-text">Harga: <?= $d["price"]; ?></p>
                        <p class="card-text">Produk Tersedia: <?= $d["stock"]; ?></p>
                        <div class="d-grid gap-2 d-md-block">
                            <a class="btn btn-warning" href="edit.php" role="button">Edit</a>
                            <a class="btn btn-danger" href="hapus.php" role="button">Hapus</a>
                        </div>
                    </div>
                </div>
            </div>
        <?php
        }
        ?>
    </div>
</div>
<!-- Akhir Card -->


<!--Awal modal-->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel"><?=$name?> yakin ingin logout?</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Jika ingin membatalkan, pilih opsi No, namun jika memang benar ingin keluar, <?=$name?> bisa memilih opsi Logout
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">No</button>
        <a class="btn btn-danger" href="../" role="button">Logout</a>
      </div>
    </div>
  </div>
</div>
<!--Akhir modal-->

</body>
<script src="../assets/Javascript/script.js">

</script>
</html>