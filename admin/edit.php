<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Edit</title>
    <link rel="icon" href="../assets/gambar/icon.png" type="image/png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/tambah.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="index3.html" class="brand-link">
    <img src="../assets/gambar/icon.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
         style="opacity: .8">
    <span class="brand-text font-weight-light">Admin</span>
  </a>
  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="../assets/gambar/ali_khatami.jpg" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">Ali Khatami</a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        <li class="nav-item menu-open">
          <a href="#" class="nav-link active">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Edit Data
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="dashboard_admin.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Back</p>
              </a>
            </li>
          </ul>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>

<div class="bungkus">
<div class="container mt-5 mb-5">
<?php
  include 'koneksi.php';
  $id = $_GET['id'];
  $data = mysqli_query($conn,"select * from products where id='$id'");
  while($d = mysqli_fetch_array($data)){
?>
<form method="post" action="update.php">
  <div class="mb-3">
    <input type="hidden" class="form-control" id="inputId" name="id" value="<?php echo $d['id']; ?>">
  </div>
  <div class="mb-3">
    <label for="inputNama" class="form-label">Nama Produk</label>
    <input type="text" class="form-control" id="inputNama" name="product_name" value="<?php echo $d['product_name']; ?>">
  </div>
  <div class="mb-3">
    <label for="inputKategori" class="form-label">Kategori</label>
    <input type="text" class="form-control" id="inputKategori" name="category_id" value="<?php echo $d['category_id']; ?>">
  </div>
  <div class="mb-3">
    <label for="inputDeskripsi" class="form-label">Deskripsi</label>
    <textarea class="form-control" id="inputDeskripsi" name="description" rows="3"><?php echo $d['description']; ?></textarea>
  </div>
  <div class="mb-3">
    <label for="inputHarga" class="form-label">Harga</label>
    <input type="number" class="form-control" id="inputHarga" name="price" value="<?php echo $d['price']; ?>">
  </div>
  <div class="mb-3">
    <label for="inputStok" class="form-label">Stok</label>
    <input type="number" class="form-control" id="inputStok" name="stock" value="<?php echo $d['stock']; ?>">
  </div>
  <div class="mb-5">
    <label for="inputGambar" class="form-label">Tautan Gambar</label>
    <input type="text" class="form-control" id="inputGambar" name="image" value="<?php echo $d['image']; ?>">
  </div>
  <div class="d-grid gap-2 d-md-block">
    <a class="btn btn-danger" href="dashboard_admin.php" role="button">Kembali</a>
    <button type="submit" class="btn btn-primary">Simpan</button>
  </div>
</form>
<?php 
  }
?>
</div>
</div>
</body>
</html>