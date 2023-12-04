<?php
require 'function.php';

// if(!empty($_SESSION["id"])){
//   header("Location: ../index.php");
// }

$register = new Register();

if(isset($_POST["submit"])){
  $result = $register->registration($_POST["name"], $_POST["username"], $_POST["email"], $_POST["telp"], $_POST["password"], $_POST["confirmpassword"]);

  if($result == 1){
    echo '<script>alert("Pendaftaran berhasil"); window.location.href = "../";</script>';
  }
  elseif($result == 10){
    echo
    "<script> alert('Nomor telepon telah terdaftar'); </script>";
  }
  elseif($result == 100){
    echo
    "<script> alert('Konfirmasi password tidak sesuai'); </script>";
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Register</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../assets/adminlte/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="../assets/adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../assets/adminlte/dist/css/adminlte.min.css">
</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="#" class="h1"><b>Register</b></a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Daftar sebagai admin baru</p>

      <form action="" method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="name" id="name" placeholder="Nama Lengkap" required autofocus>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>

        <div class="input-group mb-3">
          <input type="text" class="form-control" name="username" id="username" placeholder="Username" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>

        <div class="input-group mb-3">
          <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>

        <div class="input-group mb-3">
          <input type="number" class="form-control" name="telp" id="telp" placeholder="Nomor Telepon" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>

        <div class="input-group mb-3">
          <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>

        <div class="input-group mb-3">
          <input type="password" class="form-control" name="confirmpassword" id="confirmpassword" placeholder="Retype password" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <button type="submit" name="submit" class="btn btn-primary btn-block">Register</button>
          </div>
          <!-- /.col -->
        </div><br>
        <p class="mb-0">
          <a href="../" class="text-center">Kembali ke halaman login</a>
        </p>
      </form>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->

<!-- jQuery -->
<script src="../assets/adminlte/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../assets/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../assets/adminlte/dist/js/adminlte.min.js"></script>
</body>
</html>
