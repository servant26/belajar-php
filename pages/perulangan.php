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
            Perulangan
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
  <h2 align="center">Perulangan</h2><br><br>
  <p>Loop atau perulangan merupakan proses unutk menjalan suatu statement atau code secara iterative/ berulangan. Pada bahas PHP terdapat empat jenis perulangan, yaitu While Loop, Do While, For Loop, dan foreach</p>
<ol>
    <li>
        While
        <br>
        Perulangan `while` digunakan untuk menjalankan blok kode selama kondisi yang diberikan benar (true)<br>
        <img src="../assets/gambar/while.png" class="img-fluid" alt="...">
        <br>
        <p>Contoh Hasil:
        <?php
        // Contoh perulangan while
        $contoh_while = 1;
        while ($contoh_while <= 5) {
            echo ($contoh_while . " ");
            $contoh_while++;
        }
        ?>
        </p>
    </li>

    <li>
        Do While
        <br>
        Perulangan `do while` mirip dengan `while`, tetapi blok kode akan dijalankan sekali sebelum memeriksa kondisi<br>
        <img src="../assets/gambar/do_while.png" class="img-fluid" alt="...">
        <br>
        <p>Contoh Hasil:
        <?php
        // Contoh perulangan do while
        $contoh_do_while = 1;
        do {
            echo ($contoh_do_while . " ");
            $contoh_do_while++;
        } while ($contoh_do_while <= 5);
        ?>
        </p>
    </li>

    <li>
        For
        <br>
        Perulangan `for` digunakan untuk melakukan perulangan dengan menginisialisasi variabel, mengevaluasi kondisi, dan mengubah variabel dalam satu baris kode<br>
        <img src="../assets/gambar/for.png" class="img-fluid" alt="...">
        <br>
        <p>Contoh Hasil:

        <?php
        // Contoh perulangan for
        for ($contoh_for = 1; $contoh_for <= 5; $contoh_for++) {
            echo ($contoh_for . " ");
        }
        ?>

        </p>
    </li>

    <li>
        Foreach
        <br>
        Perulangan `foreach` digunakan untuk mengulangi setiap elemen dalam array atau objek<br>
        <img src="../assets/gambar/foreach.png" class="img-fluid" alt="...">
        <br>
        <p>Contoh Hasil:

        <?php
        // Contoh perulangan foreach (untuk Array)
        $contoh_array = array(1, 2, 3, 4, 5);
        foreach ($contoh_array as $nilai) {
            echo ($nilai . " ");
        }
        ?>

        </p>
    </li>
</ol>

  <a class="btn btn-danger mt-5" href="dashboard.php" role="button">Kembali</a>
</div>
<!--Akhir Main-->

</body>
</html>