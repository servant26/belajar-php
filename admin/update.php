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
$image = $_POST['image'];

// update data ke database
$query = "UPDATE products SET product_name='$product_name', category_id='$category_id', description='$description', price='$price', stock='$stock', image='$image' WHERE id='$id'";
if (mysqli_query($conn, $query)) {
    echo '<script>alert("Data berhasil diubah"); window.location.href = "dashboard_admin.php";</script>';
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($conn);
}

?>
