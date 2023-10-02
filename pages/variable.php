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
    <script src="assets/js/script.js"></script>
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
          <a class="nav-link active dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Variable
          </a>
          <ul class="dropdown-menu scrollable-menu">
            <li><a class="dropdown-item" href="sintaks.php">Sintaks Dasar</a></li>
            <li><a class="dropdown-item" href="variable.php">Variable</a></li>
            <li><a class="dropdown-item" href="tipe_data.php">Tipe Data</a></li>
            <li><a class="dropdown-item" href="operator.php">Operator</a></li>
          </ul>
        </li>
        <li class="nav-item mx-3">
          <a class="nav-link" href="produk.php">Produk</a>
        </li>
        <li class="nav-item mx-3">
          <a class="nav-link" href="../">Logout</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!--Akhir navbar-->

<!--Awal Main-->
<div class="container bg-light text-black p-5 mt-5 p-lg-5 pt-lg-5 text-center text-sm-start">
  <h2 align="center">Variable</h2><br><br>
  <p>Variable dapat dikatakan sebagai tempat penyimpanan data yang nantinya bisa kita pakai atau kita panggil lagi, misal dalam kasus ini, saya membuat variable nama, yang isinya Ali Khatami(nama saya), kemudian saya panggil lagi variable tersebut untuk menunjukkan isi variablenya</p>
	<img src="../assets/gambar/variable.png" class="img-fluid" alt="..."><br><br>
	<p>Hasilnya : 
		<?php
		    $nama = "Ali Khatami";
		    echo $nama . "<br>";
		?>
	</p>
  <a class="btn btn-danger mt-5" href="dashboard.php" role="button">Kembali</a>
</div>
<!--Akhir Main-->

</body>
</html>