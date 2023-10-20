<?php
// koneksi database
include '../crud/koneksi.php';

// menangkap data yang di kirim dari form
$id = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];

// update data ke database
$query = "UPDATE users SET name='$name', email='$email', phone_number='$phone' WHERE id='$id'";
if (mysqli_query($conn, $query)) {
    echo '<script>alert("Data berhasil diubah"); window.location.href = "user.php";</script>';
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($conn);
}

?>
