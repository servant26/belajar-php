<?php
// koneksi database
include 'koneksi.php';

// menangkap data yang dikirim dari form
$product_name = $_POST['product_name'];
$category_id = $_POST['category_id'];
$description = $_POST['description'];
$price = $_POST['price'];
$stock = $_POST['stock'];
//$gambar = $_POST['gambar'];
//upload gambar

$gambar = upload();
if(!$gambar){
    return false;
}

// menginput data ke database
$query = "INSERT INTO products (product_name, category_id, description, price, stock, image) VALUES ('$product_name', '$category_id', '$description', '$price', '$stock', '$gambar')";
if (mysqli_query($conn, $query)) {
    echo '<script>alert("Data berhasil ditambahkan"); window.location.href = "dashboard.php";</script>';
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($conn);
}

function upload(){
    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];

    // cek apakah tidak ada gambar yang diupload
    if ($error === 4) {
        echo "<script>alert('Pilih gambar terlebih dahulu');</script>";
        return false;
    }

    // mendeteksi tipe konten file
    $finfo = finfo_open(FILEINFO_MIME_TYPE);
    $mime = finfo_file($finfo, $tmpName);
    finfo_close($finfo);

    // daftar tipe konten yang diperbolehkan
    $allowedMimeTypes = ['image/jpeg', 'image/jpg', 'image/png'];

    if (!in_array($mime, $allowedMimeTypes)) {
        echo '<script>alert("Jenis file yang Anda unggah bukan gambar"); window.location.href = "tambah.php";</script>';
        return false;
    }

    // batasi ukuran gambar
    if ($ukuranFile > 2000000) {
        echo '<script>alert(""Ukuran gambar terlalu besar"); window.location.href = "tambah.php";</script>';
        return false;
    }

    // generate gambar baru
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= pathinfo($namaFile, PATHINFO_EXTENSION);

    // proses upload
    move_uploaded_file($tmpName, '../assets/gambar_db/' . $namaFileBaru);
    return $namaFileBaru;
}

?>
