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

    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Daftar Produk</h1>
            <a class="btn btn-primary mt-4" href="tambah.php" role="button">Tambah</a>
            <form class="d-flex mt-3" role="search" action="dashboard.php" method="get">
              <input class="form-control me-2" type="search" name="kata_cari" placeholder="Cari materi..." aria-label="Cari materi..." value="<?php if(isset($_GET['kata_cari'])) { echo $_GET['kata_cari']; } ?>">
              <button class="btn btn-primary" type="submit">Cari</button>
            </form>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- =========================================================== -->
        <h5 class="mt-1 mb-2"></h5>
      <table class="table table-striped table-dark">
        <thead>
          <tr>
            <th>No</th>
            <th>Nama Produk</th>
            <th>Foto Produk</th>
            <th>Kategori</th>
            <th>Deskripsi</th>
            <th>Harga</th>
            <th>Stok</th>
            <th>Aksi</th>
          </tr>
        </thead>

        <tbody>
        <?php
        include 'koneksi.php';
        $items_per_page = 5; 
        if (isset($_GET['kata_cari'])) {
            $kata_cari = $_GET['kata_cari'];

            $query = "SELECT * FROM products WHERE 
                      product_name LIKE '%" . $kata_cari . "%' OR
                      category_id LIKE '%" . $kata_cari . "%' OR
                      description LIKE '%" . $kata_cari . "%' OR
                      price LIKE '%" . $kata_cari . "%' OR
                      stock LIKE '%" . $kata_cari . "%'";
        } else {
            $query = "SELECT * FROM products ORDER BY id ASC";
        }

        $result = mysqli_query($conn, $query);

        if (!$result) {
            die("Query Error : " . mysqli_errno($conn) . " - " . mysqli_error($conn));
        }

        $total_items = mysqli_num_rows($result);
        $total_pages = ceil($total_items / $items_per_page); 

        $current_page = isset($_GET['page']) ? $_GET['page'] : 1;

        $start_index = ($current_page - 1) * $items_per_page;
        $query = $query . " LIMIT $start_index, $items_per_page";
        $result = mysqli_query($conn, $query);

        if (!$result) {
            die("Query Error : " . mysqli_errno($conn) . " - " . mysqli_error($conn));
        }

        $starting_number = ($current_page - 1) * $items_per_page + 1;

        while ($row = mysqli_fetch_assoc($result)) {
               ?>
               <tr>
                <td><?php echo $starting_number++; ?></td>
                <td><?php echo $row['product_name']; ?></td>
                <td class="lebar_gambar"><img src="<?php echo $row['image']; ?>" class="td_gambar"></td>
                    <td>
                      <?php
                      if ($row['category_id'] == 1) {
                          echo 'Sports';
                      } elseif ($row['category_id'] == 2) {
                          echo 'Daily';
                      } elseif ($row['category_id'] == 3) {
                          echo 'Accessories';
                      } else {
                          echo 'Unknown';
                      }
                      ?>
                    </td>
                <td><?php echo $row['description']; ?></td>
                <td><?php echo $row['price']; ?></td>
                <td><?php echo $row['stock']; ?></td>
                <td>
                  <div class="d-grid gap-2 d-md-block">
                      <a class="btn btn-warning" href="edit.php?id=<?php echo $row['id']; ?>" role="button">Edit</a>
                      <a class="btn btn-danger" href="hapus.php?id=<?php echo $row['id']; ?>" role="button">Hapus</a>
                  </div>          
                </td>
               </tr>
               <?php
               }
        ?>
  </tbody>
  </table>
  <!-- Pagination below the table -->
  <nav aria-label="Page navigation example">
      <ul class="pagination justify-content-center mt-4">
          <?php
          if ($current_page > 1) {
              echo '<li class="page-item"><a class="page-link" href="?page=' . ($current_page - 1) . '">Prev</a></li>';
          }

          for ($page = 1; $page <= $total_pages; $page++) {
              echo '<li class="page-item' . ($page == $current_page ? ' active' : '') . '"><a class="page-link" href="?page=' . $page . '">' . $page . '</a></li>';
          }

          if ($current_page < $total_pages) {
              echo '<li class="page-item"><a class="page-link" href="?page=' . ($current_page + 1) . '">Next</a></li>';
          }
          ?>
      </ul>
  </nav>
</div>
    <!-- /.content -->
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
