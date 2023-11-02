<?php 
include 'database.php';
$db = new database();

$aksi = $_GET['aksi'];
if ($aksi == "tambah") {
    $uploadPath = '../assets/gambar_db/';
    $uploadedImages = array();

    $allowedExtensions = array("jpg", "jpeg", "png"); 

    foreach ($_FILES['image']['name'] as $key => $image_name) {
        $tempImageName = $_FILES['image']['tmp_name'][$key];
        $newImageName = time() . '_' . $image_name;

        $fileExtension = pathinfo($newImageName, PATHINFO_EXTENSION);

        if (in_array(strtolower($fileExtension), $allowedExtensions)) {
            if (move_uploaded_file($tempImageName, $uploadPath . $newImageName)) {
                $uploadedImages[] = $newImageName;
            }
        } else {
            echo '<script>alert("Jenis file yang Anda unggah bukan gambar"); window.location.href = "tambah.php";</script>';
            exit; 
        }
    }

    $imagePaths = implode(', ', $uploadedImages);
    $db->input($_POST['product_name'], $_POST['category_id'], $_POST['description'], $_POST['price'], $_POST['stock'], $imagePaths);
    echo '<script>alert("Data berhasil ditambahkan"); window.location.href = "dashboard.php";</script>';

} elseif ($aksi == "hapus") {
    $db->hapus($_GET['id']);
    header("location:dashboard.php");

} elseif ($aksi == "hapusUser") {
    $db->hapus($_GET['id']);
    header("location:dashboard.php");

} elseif ($aksi == "update") {
    $id = $_POST['id'];
    $product_name = $_POST['product_name'];
    $category_id = $_POST['category_id'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $stock = $_POST['stock'];
    
    $imagePaths = '';

    if (isset($_FILES['image']['name']) && !empty($_FILES['image']['name'])) {
        $uploadPath = '../assets/gambar_db/';
        $uploadedImages = array();

        $allowedExtensions = array("jpg", "jpeg", "png"); 

        foreach ($_FILES['image']['name'] as $key => $image_name) {
            $tempImageName = $_FILES['image']['tmp_name'][$key];
            $newImageName = time() . '_' . $image_name;

            $fileExtension = pathinfo($newImageName, PATHINFO_EXTENSION);

            if (in_array(strtolower($fileExtension), $allowedExtensions)) {
                if (move_uploaded_file($tempImageName, $uploadPath . $newImageName)) {
                    $uploadedImages[] = $newImageName;
                }
            } else {
                echo '<script>alert("Jenis file yang Anda unggah bukan gambar"); window.location.href = "dashboard.php";</script>';
                exit; 
                }
        }
        $imagePaths = implode(', ', $uploadedImages);

    } else {
        $imagePaths = $_POST['gambarLama'];
    }

    $db->update($id, $product_name, $category_id, $description, $price, $stock, $imagePaths);
    echo '<script>alert("Data berhasil diubah"); window.location.href = "dashboard.php";</script>';
}

?>