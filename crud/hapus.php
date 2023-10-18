<?php 
// koneksi database
require_once 'koneksi.php';

// menangkap data id yang di kirim dari url
$id = $_GET['id'];

// Tambahkan konfirmasi alert JavaScript
$confirmation = "Apakah Anda yakin ingin menghapus data ini?";
if (isset($_GET['confirm']) && $_GET['confirm'] == 'yes') {
    // Jika user mengonfirmasi, maka hapus data
    mysqli_query($conn, "delete from products where id='$id'");
    echo '<script>alert("Data berhasil dihapus"); window.location.href = "dashboard.php";</script>';
} else {
    // Jika user membatalkan, arahkan kembali ke dashboard_admin.php
    echo "<script>
            var confirmed = window.confirm('$confirmation');
            if (confirmed) {
                window.location.href = 'hapus.php?id=$id&confirm=yes';
            } else {
                window.location.href = 'dashboard.php';
            }
          </script>";
}
?>
