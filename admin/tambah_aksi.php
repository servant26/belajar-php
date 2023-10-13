<?php
// koneksi database
require_once 'koneksi.php';

// menangkap data yang dikirim dari form
$product_name = $_POST['product_name'];
$category_id = $_POST['category_id'];
$description = $_POST['description'];
$price = $_POST['price'];
$stock = $_POST['stock'];
$image = $_POST['image'];

// menginput data ke database
$query = "INSERT INTO products (product_name, category_id, description, price, stock, image) VALUES ('$product_name', '$category_id', '$description', '$price', '$stock', '$image')";
if (mysqli_query($conn, $query)) {
    echo '<script>alert("Data berhasil ditambahkan"); window.location.href = "dashboard_admin.php";</script>';
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($conn);
}
?>
