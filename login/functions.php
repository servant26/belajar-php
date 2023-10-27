<?php 
$host = "localhost";
$username = "root";
$password = "";
$database = "pos_shop";

$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

function registrasi($data){
    global $conn;

    $name = strtolower(stripcslashes($data["name"]));
    $email = strtolower(stripcslashes($data["email"]));
    $username = strtolower(stripcslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);
    $group_id = 3;

    //cek username sudah ada atau belum
    $result = mysqli_query($conn, "SELECT phone_number FROM users WHERE phone_number = '$username'");

    if( mysqli_fetch_assoc($result) ){
        echo"<script>
                alert('User telah terdaftar')
            </script>";
        return false;
    }

    //cek konfirmasi password
    if($password !== $password2){
        echo "<script>alert('Konfirmasi password tidak sesuai')</script>";
        return false;
    }

    //enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    //tambahkan user baru ke database
    mysqli_query($conn, "INSERT INTO users(name, email, phone_number, password, group_id) VALUES('$name','$email','$username','$password','$group_id')");

    return mysqli_affected_rows($conn);
}

?>
