<?php
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
		"gambar" => "../assets/gambar/eafc24.jpg",
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

  [
    "nama" => "Mario",
    "gambar" => "../assets/gambar/mario.jpg",
    "deskripsi" => "Bermain game balapan bersama Mario dan teman-teman",
    "link" => "https://www.nintendo.com/us/store/products/mario-kart-8-deluxe-switch/",
  ],

  [
    "nama" => "Red Dead Redemption",
    "gambar" => "../assets/gambar/rdr.jpg",
    "deskripsi" => "Bermain game petualangan seru di Red Dead Redemption series pertama ini",
    "link" => "https://www.nintendo.com/us/store/products/red-dead-redemption-switch/",
  ],
];

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Blank Page</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../assets/adminlte/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../assets/adminlte/dist/css/adminlte.min.css">
  <link href="../assets\bootstrap-5.3.2-dist\css\bootstrap.min.css" rel="stylesheet">
  <script src="../assets\bootstrap-5.3.2-dist\js\bootstrap.bundle.min.js"></script>
  <script src="../assets/js/script.js"></script>
  <link rel="stylesheet" type="text/css" href="../assets/css/produk.css">
</head>
<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-dark">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="https://adminlte.io" target="_blank" class="brand-link">
      <img src="../assets/adminlte/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-dark">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../assets/adminlte/dist/img/ali_khatami.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Ali Khatami</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="../crud/dashboard.php" class="nav-link">
              <p>
                Pos Shop
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link active">
              <p>
                Produk Nintendo
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../pages/produk_variable.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Produk (Variable)</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../pages/produk_array.php" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Produk (Array)</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="../index.php" class="nav-link">
              <p>
                Logout
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Daftar Produk (Array)</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- =========================================================== -->
        <table class="table table-striped table-dark">
          <tr>
            <th>NO</th>
            <th>Gambar</th>
            <th>Nama Game</th>
            <th>Deskripsi</th>
            <th>Link</th>
          </tr>
        <?php 
        $no = 1;
        foreach ($produk as $pd) :?> 
        <div class="row">
          <div class="col-md-4 col-sm-6 col-12">
          <tr>
            <td><?= $no++; ?></td>
            <td class="lebar_gambar"><img src="<?= $pd["gambar"];?>" class="td_gambar"></td>
            <td><?= $pd['nama'];?></td>
            <td><?= $pd['deskripsi'];?></td>
            <td class="lebar_link"><a href="<?= $pd["link"];?>" class="btn btn-primary" target="_blank">Beli</a></td>
          </tr>
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
		    <?php endforeach; ?>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
    </div>
    <strong>Copyright &copy; Ali Khatami</strong>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../assets/adminlte/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../assets/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../assets/adminlte/dist/js/adminlte.min.js"></script>
</body>
</html>
