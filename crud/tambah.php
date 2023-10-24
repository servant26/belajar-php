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
  <link rel="stylesheet" type="text/css" href="../assets/css/crud.css">
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
      <li class="nav-item">
        <a class="nav-link" href="#">
          <?php
          date_default_timezone_set('Asia/Makassar');

          $nama_hari = array("Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu");

          $hari = date("w");
          $tanggal = date("d");
          $bulan = date("n");
          $tahun = date("Y");

          $nama_bulan = array(
              "Januari", "Februari", "Maret", "April", "Mei", "Juni",
              "Juli", "Agustus", "September", "Oktober", "November", "Desember"
          );

          $jam = date("H");
          $menit = date("i");
          $detik = date("s");

          echo $nama_hari[$hari] . ", " . $tanggal . " " . $nama_bulan[$bulan - 1] . " " . $tahun . " " . $jam . ":" . $menit . ":" . $detik . " WITA";
          ?>
        </a>
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
            <a href="#" class="nav-link active">
              <p>
                Pos Shop
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="../pages/keterangan_data.php" class="nav-link">
              <p>
                Keterangan Data
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
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
                <a href="../pages/produk_array.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Produk (Array)</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="../pages/user.php" class="nav-link">
              <p>
                Daftar Pengguna
              </p>
            </a>
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
    <section class="content">
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="container mt-1 mb-5">
        <form method="post" action="tambah_aksi.php" enctype="multipart/form-data">
          <div class="mb-3">
            <label for="inputNama" class="form-label">Nama Produk</label>
            <input type="text" class="form-control" id="inputNama" name="product_name" required>
          </div>
          <div class="mb-3">
              <label for="inputKategori" class="form-label">Kategori</label>
              <select class="form-select" id="inputKategori" name="category_id" required>
                  <option value="1">Sports</option>
                  <option value="2">Daily</option>
                  <option value="3">Accessories</option>
              </select>
          </div>
          <div class="mb-3">
            <label for="inputDeskripsi" class="form-label">Deskripsi</label>
            <textarea class="form-control" id="inputDeskripsi" name="description" rows="3" required></textarea>
          </div>
          <div class="mb-3">
            <label for="inputHarga" class="form-label">Harga</label>
            <input type="number" class="form-control" id="inputHarga" name="price" required>
          </div>
          <div class="mb-3">
            <label for="inputStok" class="form-label">Stok</label>
            <input type="number" class="form-control" id="inputStok" name="stock" required>
          </div>
          <div class="mb-5">
            <label for="inputGambar" class="form-label">Upload Gambar (Maksimal 2MB)</label>
            <input type="file" class="form-control" id="inputGambar" name="gambar" required>
          </div>
          <div class="d-grid gap-2 d-md-block">
            <a class="btn btn-danger" href="dashboard.php" role="button">Kembali</a>
            <button type="submit" class="btn btn-primary">Simpan</button>
          </div>
        </form>
        </div>
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
