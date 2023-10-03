<?php
  $game1 = "Fortnite";
  $gambar1 = "../assets/gambar/fortnite.jpg";
  $deskripsi1 = "Masuk ke medan tempur, bertahan hidup, dan jadilah pemain terakhir";
  $link1 = "https://www.nintendo.com/store/products/fortnite-switch/";

  $game2 = "NieR:Automata";
  $gambar2 = "../assets/gambar/nier.jpg";
  $deskripsi2 = "Bermain game action adventure seru bersama Nier Automata";
  $link2 = "https://www.nintendo.com/store/products/nier-automata-the-end-of-yorha-edition-switch/";

  $game3 = "Mortal Kombat 11";
  $gambar3 = "../assets/gambar/mortal_kombat.jpg";
  $deskripsi3 = "Game Fighting dengan mekanik menarik yang tidak kalah epic";
  $link3 = "https://www.nintendo.com/store/products/mortal-kombat-11-switch/";

  $game4 = "EA FC 24";
  $gambar4 = "../assets/gambar/fifa.jpg";
  $deskripsi4 = "Bermain game bola, rasakan atmosfer baru dari game EAFC 24 ini";
  $link4 = "https://www.nintendo.com/store/products/ea-sports-fc-24-switch/";

  $game5 = "Naruto Ultimate Ninja Storm 4";
  $gambar5 = "../assets/gambar/nsuns4.jpg";
  $deskripsi5 = "Bertarung menggunakan karakter favoritmu di game ini";
  $link5 = "https://www.nintendo.com/store/products/naruto-shippuden-ultimate-ninja-storm-4-road-to-boruto-switch/";

  $game6 = "The Legend of Zelda: Breath of the Wild";
  $gambar6 = "../assets/gambar/zelda.jpg";
  $deskripsi6 = "Nikmati petualangan didunia yang luas";
  $link6 = "https://www.nintendo.com/store/products/the-legend-of-zelda-breath-of-the-wild-switch/";
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
          <a class="nav-link active" href="produk_variable.php">Produk (Variable)</a>
        </li>
        <li class="nav-item mx-3">
          <a class="nav-link" href="produk_array.php">Produk (Array)</a>
        </li>
        <li class="nav-item mx-3">
          <a class="nav-link" href="../">Logout</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!--Akhir navbar-->

<!--Awal Card-->
<div class="container mt-5 mb-5" id="card-materi">
  <div class="row g-4">
    <div class="col-12 col-md-6 col-lg-4">
      <div class="card">
        <img src="<?=$gambar1?>" class="card-img-top">
        <div class="card-body">
          <h5 class="card-title"><?=$game1?></h5>
          <p class="card-text"><?=$deskripsi1?></p>
          <a href="<?=$link1?>" class="btn btn-primary" target="_blank">Baca selengkapnya...</a><br><br>
        </div>
      </div>
    </div>

    <div class="col-12 col-md-6 col-lg-4">
      <div class="card">
        <img src="<?=$gambar2?>" class="card-img-top">
        <div class="card-body">
          <h5 class="card-title"><?=$game2?></h5>
          <p class="card-text"><?=$deskripsi2?></p>
          <a href="<?=$link2?>" class="btn btn-primary" target="_blank">Baca selengkapnya...</a><br><br>
        </div>
      </div>
    </div>

    <div class="col-12 col-md-6 col-lg-4">
      <div class="card">
        <img src="<?=$gambar3?>" class="card-img-top">
        <div class="card-body">
          <h5 class="card-title"><?=$game3?></h5>
          <p class="card-text"><?=$deskripsi3?></p>
          <a href="<?=$link3?>" class="btn btn-primary" target="_blank">Baca selengkapnya...</a><br><br>
        </div>
      </div>
    </div>

    <div class="col-12 col-md-6 col-lg-4">
      <div class="card">
        <img src="<?=$gambar4?>" class="card-img-top">
        <div class="card-body">
          <h5 class="card-title"><?=$game4?></h5>
          <p class="card-text"><?=$deskripsi4?></p>
          <a href="<?=$link4?>" class="btn btn-primary" target="_blank">Baca selengkapnya...</a><br><br>
        </div>
      </div>
    </div>

    <div class="col-12 col-md-6 col-lg-4">
      <div class="card">
        <img src="<?=$gambar5?>" class="card-img-top">
        <div class="card-body">
          <h5 class="card-title"><?=$game5?></h5>
          <p class="card-text"><?=$deskripsi5?></p>
          <a href="<?=$link5?>" class="btn btn-primary" target="_blank">Baca selengkapnya...</a><br><br>
        </div>
      </div>
    </div>

    <div class="col-12 col-md-6 col-lg-4">
      <div class="card">
        <img src="<?=$gambar6?>" class="card-img-top">
        <div class="card-body">
          <h5 class="card-title"><?=$game6?></h5>
          <p class="card-text"><?=$deskripsi6?></p>
          <a href="<?=$link6?>" class="btn btn-primary" target="_blank">Baca selengkapnya...</a><br><br>
        </div>
      </div>
    </div>
  </div><br><br>
  <a class="btn btn-danger" href="dashboard.php" role="button">Kembali</a>
</div>
<!--Akhir Card-->


</body>
</html>