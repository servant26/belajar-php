<?php  
$username = $_POST['username'];
$password = $_POST['password'];

if ($username == "user" && $password == "123") {
    echo '<script>alert("Selamat, anda berhasil Login"); window.location.href = "../crud/dashboard.php";</script>';
    exit();
}
else {
    echo '<script>alert("Username atau password salah. coba masukkan username user dan password 123"); window.location.href = "../index.php";</script>';
}
?>
