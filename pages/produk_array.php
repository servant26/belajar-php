<?php
session_start();

if (isset($_SESSION['name'])) {
    $name = $_SESSION['name'];
} else {
    $name = "";
}

$produk = [
	[
		"nama" => "The Legend of Zelda: Breath of the Wild",
		"gambar" => "../assets/gambar/zelda.jpg",
		"deskripsi" => "Nikmati petualangan didunia yang luas",
		"link" => "https://www.nintendo.com/store/products/the-legend-of-zelda-breath-of-the-wild-switch/",
	],

	[
		"nama" => "Naruto Ultimate Ninja Storm 4",
		"gambar" => "../assets/gambar/nsuns4.jpg",
		"deskripsi" => "Bertarung menggunakan karakter favoritmu di game ini",
		"link" => "https://www.nintendo.com/store/products/naruto-shippuden-ultimate-ninja-storm-4-road-to-boruto-switch/",
	],

	[
		"nama" => "EA FC 24",
		"gambar" => "../assets/gambar/fifa.jpg",
		"deskripsi" => "Bermain game bola, rasakan atmosfer baru dari game EAFC 24 ini",
		"link" => "https://www.nintendo.com/store/products/ea-sports-fc-24-switch/",
	],

	[
		"nama" => "Mortal Kombat 11",
		"gambar" => "../assets/gambar/mortal_kombat.jpg",
		"deskripsi" => "Game Fighting dengan mekanik menarik yang tidak kalah epic",
		"link" => "https://www.nintendo.com/store/products/mortal-kombat-11-switch/",
	],

	[
		"nama" => "NieR:Automata",
		"gambar" => "../assets/gambar/nier.jpg",
		"deskripsi" => "Bermain game action adventure seru bersama Nier Automata",
		"link" => "https://www.nintendo.com/store/products/nier-automata-the-end-of-yorha-edition-switch/",
	],

	[
		"nama" => "Fortnite",
		"gambar" => "../assets/gambar/fortnite.jpg",
		"deskripsi" => "Masuk ke medan tempur, bertahan hidup, dan jadilah pemain terakhir",
		"link" => "https://www.nintendo.com/store/products/fortnite-switch/",
	],
];

 ?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Belajar PHP</title>
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
          <a class="nav-link" aria-current="page" href="dashboard.php">Home</a>
        </li>
        <li class="nav-item dropdown mx-3">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Penerapan PHP
          </a>
          <ul class="dropdown-menu scrollable-menu">
            <li><a class="dropdown-item" href="sintaks.php">Sintaks Dasar</a></li>
            <li><a class="dropdown-item" href="variable.php">Variable</a></li>
            <li><a class="dropdown-item" href="tipe_data.php">Tipe Data</a></li>
            <li><a class="dropdown-item" href="operator.php">Operator</a></li>
            <li><a class="dropdown-item" href="percabangan.php">Percabangan</a></li>
            <li><a class="dropdown-item" href="perulangan.php">Perulangan</a></li>
            <li><a class="dropdown-item" href="function.php">Function</a></li>
          </ul>
        </li>
        <li class="nav-item mx-3">
          <a class="nav-link" href="produk_variable.php">Produk (Variable)</a>
        </li>
        <li class="nav-item mx-3">
          <a class="nav-link active" href="produk_array.php">Produk (Array)</a>
        </li>
        <li class="nav-item mx-3">
          <a class="nav-link" href="../koneksi/koneksi.php">Tes Koneksi</a>
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

<!--Awal Card-->
<div class="container mt-5 mb-5" id="card-materi">
  <div class="row g-4">
    <?php foreach ($produk as $pd) :?> 
    <div class="col-lg-4 col-md-6 col-sm-12">
      <div class="card">
        <img src="<?= $pd["gambar"];?>" class="card-img-top">
        <div class="card-body">
          <h5 class="card-title"><?= $pd["nama"];?></h5>
          <p class="card-text"><?= $pd["deskripsi"];?></p>
          <a href="<?= $pd["link"];?>" class="btn btn-primary" target="_blank">Baca selengkapnya...</a><br><br>
        </div>
      </div>
    </div>
    <?php endforeach; ?>
  </div><br><br>
  <a class="btn btn-danger" href="dashboard.php" role="button">Kembali</a>
</div>
<!--Akhir Card-->


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