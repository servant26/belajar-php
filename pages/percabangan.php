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
            Percabangan
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

<!--Awal Main-->
<div class="container bg-light text-black p-5 mt-5 p-lg-5 pt-lg-5 text-center text-sm-start">
  <h2 align="center">Percabangan</h2><br><br>
  <p>Decision making (pengambilan keputusan/ percabangan) merupakan proses untuk menjalankan statement tertentu berdasarkan suuatu kondisi yang dievaluasi. Di dalam bahasa PHP terdapat tiga cara unutk menuliskan decision making, percabangan terdiri atas if, if else if, dan if else if else, serta ada juga switch case, berikut contohnya</p>
  <ol>
    <li>If<br>Pada if, kondisi percabangannya hanya satu</li>
    <img src="../assets/gambar/if.png" class="img-fluid" alt="..."><br><br>
    <p>Hasilnya : 
      <?php
        $contoh_if = 18;
        if ($contoh_if > 17) {
          echo ("anda bisa membuat SIM");
        }
		  ?>    
    </p>
    <li>If Else if<br>Nah untuk if else if, artinya kita akan memiliki 2 nilai percabangan yang berbeda, dalam kasus ini, saya membuat umur berada dibawah 17 sehingga percabangan yang kedua akan dijalankan dan memiliki hasil "anda belum bisa membuat SIM"</li>
    <img src="../assets/gambar/if_else.png" class="img-fluid" alt="..."><br><br>
    <p>Hasilnya : 
      <?php
        $contoh_if = 16;
        if ($contoh_if > 17) {
          echo ("anda bisa membuat SIM");
        }else if ($contoh_if < 17){
          echo ("anda belum bisa membuat SIM");
        }
      ?> 
    </p>
    <li>Else<br>Else sendiri berarti nilai yang akan muncul ketika seluruh percabangan tidak terpenuhi, misal disini saya membuat nilainya menjadi 17 dimana nilai tersebut tidak lebih dari 17 dan juga tidak kurang dari 17 sehingga program akan membaca nilai else</li>
    <img src="../assets/gambar/else.png" class="img-fluid" alt="..."><br><br>
    <p>Hasilnya : 
      <?php
        $contoh_if = 17;
        if ($contoh_if > 17) {
          echo ("anda bisa membuat SIM");
        }else if ($contoh_if < 17){
          echo ("anda belum bisa membuat SIM");
        }else{
          echo("umur anda tepat 17 tahun");
        }
      ?> 
    </p>

    <li>Switch<br>Sama seperti if else, switch case juga bisa dibuat untuk operasi percabangan</li>
    <img src="../assets/gambar/switch_case.png" class="img-fluid" alt="..."><br><br>
    <p>Hasilnya : 

      <?php
      $nilai = 85; // Ganti nilai ulangan sesuai kebutuhan

      switch ($nilai) {
          case ($nilai >= 90 && $nilai <= 100):
              echo "Nilai: $nilai, Anda mendapatkan nilai A";
              break;
          case ($nilai >= 80 && $nilai < 90):
              echo "Nilai: $nilai, Anda mendapatkan nilai B";
              break;
          case ($nilai >= 70 && $nilai < 80):
              echo "Nilai: $nilai, Anda mendapatkan nilai C";
              break;
          case ($nilai >= 60 && $nilai < 70):
              echo "Nilai: $nilai, Anda mendapatkan nilai D";
              break;
          case ($nilai < 60):
              echo "Nilai: $nilai, Anda mendapatkan nilai E (Tidak Lulus)";
              break;
          default:
              echo "Nilai tidak valid";
      }
      ?>
      
    </p>

  </ol>
  <a class="btn btn-danger mt-5" href="dashboard.php" role="button">Kembali</a>
</div>
<!--Akhir Main-->

</body>
</html>