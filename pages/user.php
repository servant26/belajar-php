<?php 
include '../crud/database.php';
$db = new database();

require '../login/function.php';

$select = new Select();

if(!empty($_SESSION["id"])){
  $user = $select->selectUserById($_SESSION["id"]);
}
else{
  header("Location: ../");
}

$recordsPerPage = 5;

$totalRecords = count($db->tampil_data_user());

$totalPages = ceil($totalRecords / $recordsPerPage);

$currentPage = isset($_GET['page']) ? $_GET['page'] : 1;

if ($currentPage < 1) {
    $currentPage = 1;
} elseif ($currentPage > $totalPages) {
    $currentPage = $totalPages;
}

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
          <img src="../assets/adminlte/dist/img/profil.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo $user["name"]; ?></a>
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
            <a href="#" class="nav-link active">
              <p>
                Daftar Pengguna
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="../login/logout.php" class="nav-link" onclick="return confirm('Anda yakin ingin logout?');">
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

    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Daftar Pengguna</h1>
            <form class="d-flex mt-3" role="search" action="user.php" method="get">
              <input class="form-control me-2" type="search" name="kata_cari_user" placeholder="Cari materi..." aria-label="Cari materi..." value="<?php if(isset($_GET['kata_cari_user'])) { echo $_GET['kata_cari_user']; } ?>">
              <button class="btn btn-primary" type="submit">Cari</button>
            </form>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <section class="content">
      <div class="container-fluid">
        <!-- =========================================================== -->
        <h5 class="mt-1 mb-2"></h5>
        <div class="table-responsive">
          <table class="table table-striped table-dark">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Posisi</th>
                <th>Email</th>
                <th>Phone Number</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
            <?php
            $no = ($currentPage - 1) * $recordsPerPage + 1;
            $startingRecord = ($currentPage - 1) * $recordsPerPage;
            $recordsToDisplay = array_slice($db->tampil_data_user(), $startingRecord, $recordsPerPage);
            foreach ($recordsToDisplay as $x) {
                  ?>
                  <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $x['name']; ?></td>
                    <td><?php echo $x['nama_posisi']; ?></td>
                    <td><?php echo $x['email']; ?></td>
                    <td><?php echo $x['phone_number']; ?></td>
                    <td>
                      <div class="d-grid gap-2 d-md-block">
                          <a class="btn btn-danger" href="../crud/proses.php?id=<?php echo $x['id']; ?>&aksi=hapusUser" onclick="return confirm('Apakah Anda yakin ingin menghapus <?php echo $x['name']; ?>?');" role="button">Hapus</a>
                      </div>          
                    </td>
                  </tr>
                  <?php
                  }
            ?>
      </tbody>
          </table>
        </div>
</div>
<!-- /.content -->
<!-- /.content-wrapper -->
<!-- Pagination -->
<nav aria-label="...">
  <ul class="pagination justify-content-center">
    <li class="page-item <?php echo $currentPage == 1 ? 'disabled' : ''; ?>">
      <a class="page-link" href="?page=<?php echo $currentPage - 1; ?>">Previous</a>
    </li>

    <?php for ($page = 1; $page <= $totalPages; $page++) { ?>
      <li class="page-item <?php echo $currentPage == $page ? 'active' : ''; ?>">
        <a class="page-link" href="?page=<?php echo $page; ?>"><?php echo $page; ?></a>
      </li>
    <?php } ?>

    <li class="page-item <?php echo $currentPage == $totalPages ? 'disabled' : ''; ?>">
      <a class="page-link" href="?page=<?php echo $currentPage + 1; ?>">Next</a>
    </li>
  </ul>
</nav>
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
