<?php
session_start();

if (!isset($_SESSION['name'])) {
    header("Location: ../index.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="../assets/gambar/icon.png" type="image/png">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/dashboard.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
	<title>Read</title>
</head>
<body>
<a class="btn btn-primary mb-1" href="tambah.php" role="button" style="margin-left: 21%; margin-top: 2%;">Tambah Data</a>

<div class="card-container">
<?php 
	include 'koneksi.php';
	$no = 1;
	$data = mysqli_query($conn,"select * from products");
	while($d = mysqli_fetch_array($data)){
?>
<div class="kartu">
<div class="info-box">
  <span class="info-box-icon" style="width: 130px;"><i class="far fa-bookmark"></i>
  	<img src="<?=$d['image'];?>" style="height: 100%;">
  </span>
  <div class="info-box-content">
  <span class="info-box-text"><?=$d['product_name'];?></span>
  <span class="info-box-text">
    <?php
    if ($d['category_id'] == 1) {
        echo 'Sports';
    } elseif ($d['category_id'] == 2) {
        echo 'Daily';
    } elseif ($d['category_id'] == 3) {
        echo 'Accessories';
    } else {
        echo 'Unknown';
    }
    ?>
</span>
  <span class="info-box-number">Rp.<?=$d['price'];?></span>
  <span class="info-box-text"><?=$d['description'];?></span>
  <div class="progress">
      <div class="progress-bar bg-info" style="width: 70%"></div>
  </div>
  <span class="progress-description">
  Stok : <?=$d['stock'];?>
  </span>
  <div class="d-grid gap-2 d-md-block">
      <a class="btn btn-warning" href="edit.php?id=<?php echo $d['id']; ?>" role="button">Edit</a>
      <a class="btn btn-danger" href="hapus.php?id=<?php echo $d['id']; ?>" role="button">Hapus</a>
  </div>
  </div>
</div>
</div>
<?php 
		}
?>
</div>

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="index3.html" class="brand-link">
    <img src="../assets/gambar/icon.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
         style="opacity: .8">
    <span class="brand-text font-weight-light">
        <?php
        if (isset($_SESSION['name'])) {
            $name = $_SESSION['name'];
            echo "$name";
        } else {
            echo "Admin";
        }
        ?>
    </span>
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
              Home
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="../index.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Logout</p>
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
</body>
</html>