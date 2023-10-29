<?php
// Koneksi database
include 'koneksi.php';

// Tangkap data yang dikirim dari form
$product_name = $_POST['product_name'];
$category_id = $_POST['category_id'];
$description = $_POST['description'];
$price = $_POST['price'];
$stock = $_POST['stock'];

// Upload gambar
$gambar = upload();
if (!$gambar) {
    // Handle kesalahan upload
    echo '<script>alert("Gagal mengunggah gambar"); window.location.href = "tambah.php";</script>';
    exit;
}

// Menginput data ke database
$query = "INSERT INTO products (product_name, category_id, description, price, stock, image) VALUES ('$product_name', '$category_id', '$description', '$price', '$stock', '$gambar')";
if (mysqli_query($conn, $query)) {
    echo '<script>alert("Data berhasil ditambahkan"); window.location.href = "dashboard.php";</script>';
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($conn);
}

function upload()
{
    // Mendapatkan array file yang diunggah
    $gambar = $_FILES['gambar'];

    // Inisialisasi array untuk nama file gambar yang baru
    $namaFileBaru = [];

    // Iterasi melalui array file
    for ($i = 0; $i < count($gambar['name']); $i++) {
        $namaFile = $gambar['name'][$i];
        $ukuranFile = $gambar['size'][$i];
        $error = $gambar['error'][$i];
        $tmpName = $gambar['tmp_name'][$i];

        // Proses validasi dan penyimpanan gambar
        // Validasi tipe file
        $finfo = finfo_open(FILEINFO_MIME_TYPE);
        $mime = finfo_file($finfo, $tmpName);
        finfo_close($finfo);

        $allowedMimeTypes = ['image/jpeg', 'image/jpg', 'image/png'];
        if (!in_array($mime, $allowedMimeTypes)) {
            echo '<script>alert("Jenis file yang Anda unggah bukan gambar"); window.location.href = "tambah.php";</script>';
            return false;
        }

        // Batasi ukuran gambar
        if ($ukuranFile > 2000000) {
            echo '<script>alert("Ukuran gambar terlalu besar"); window.location.href = "tambah.php";</script>';
            return false;
        }

        // Generate nama file baru
        $namaFileBaruPerGambar = uniqid();
        $namaFileBaruPerGambar .= '.';
        $namaFileBaruPerGambar .= pathinfo($namaFile, PATHINFO_EXTENSION);

        // Proses upload
        $tujuan = '../assets/gambar_db/' . $namaFileBaruPerGambar;
        if (move_uploaded_file($tmpName, $tujuan)) {
            $namaFileBaru[] = $namaFileBaruPerGambar;
        } else {
            echo '<script>alert("Gagal mengunggah gambar"); window.location.href = "tambah.php";</script>';
            return false;
        }
    }

    // Kembalikan daftar nama file baru sebagai string
    return implode(', ', $namaFileBaru);
}
?>
