<?php
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$id = $_POST['id'];
$product_name = $_POST['product_name'];
$category_id = $_POST['category_id'];
$description = $_POST['description'];
$price = $_POST['price'];
$stock = $_POST['stock'];
$gambarLama = $_POST['gambarLama'];

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
        echo '<script>alert("Jenis file yang Anda unggah bukan gambar"); window.location.href = "edit.php";</script>';
        return false;
    }

    // batasi ukuran gambar
    if ($ukuranFile > 2000000) {
        echo '<script>alert(""Ukuran gambar terlalu besar"); window.location.href = "edit.php";</script>';
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

// Cek apakah ada file yang diunggah
if(isset($_FILES['gambar']['name'][0]) && !empty($_FILES['gambar']['name'][0])){
    $gambarBaru = array(); // Inisialisasi array untuk nama file gambar baru

    // Iterasi melalui array gambar
    foreach($_FILES['gambar']['name'] as $key => $gambar) {
        $namaFile = $_FILES['gambar']['name'][$key];
        $ukuranFile = $_FILES['gambar']['size'][$key];
        $error = $_FILES['gambar']['error'][$key];
        $tmpName = $_FILES['gambar']['tmp_name'][$key];

        // Cek apakah ada gambar yang diupload
        if ($error === 4) {
            echo "<script>alert('Pilih gambar terlebih dahulu');</script>";
            exit;
        }

        // Mendeteksi tipe konten file
        $finfo = finfo_open(FILEINFO_MIME_TYPE);
        $mime = finfo_file($finfo, $tmpName);
        finfo_close($finfo);

        // Daftar tipe konten yang diperbolehkan
        $allowedMimeTypes = ['image/jpeg', 'image/jpg', 'image/png'];

        if (!in_array($mime, $allowedMimeTypes)) {
            echo '<script>alert("Jenis file yang Anda unggah bukan gambar"); window.location.href = "edit.php";</script>';
            exit;
        }

        // Batasi ukuran gambar
        if ($ukuranFile > 2000000) {
            echo '<script>alert("Ukuran gambar terlalu besar"); window.location.href = "edit.php";</script>';
            exit;
        }

        // Generate nama file baru
        $namaFileBaru = uniqid();
        $namaFileBaru .= '.';
        $namaFileBaru .= pathinfo($namaFile, PATHINFO_EXTENSION);

        // Proses upload
        move_uploaded_file($tmpName, '../assets/gambar_db/' . $namaFileBaru);
        $gambarBaru[] = $namaFileBaru;
    }

    // Gabungkan nama file gambar baru ke dalam string
    $gambar = implode(', ', $gambarBaru);
} else {
    // Jika tidak ada gambar yang diunggah, gunakan gambar yang lama
    $gambar = $gambarLama;
}

// Update data ke database
$query = "UPDATE products SET product_name='$product_name', category_id='$category_id', description='$description', price='$price', stock='$stock', image='$gambar' WHERE id='$id'";
if (mysqli_query($conn, $query)) {
    echo '<script>alert("Data berhasil diubah"); window.location.href = "dashboard.php";</script>';
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($conn);
}
?>
