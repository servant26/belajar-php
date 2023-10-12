<?php  
$username = $_POST['username'];
$password = $_POST['password'];

if ($username == "user" && $password == "123") {
    session_start();

    $name = ucwords($_POST['name']);
    
    $_SESSION['name'] = $name;
    header("Location: pages/dashboard.php");
    exit();

}elseif ($username == "admin" && $password == "123") {
    session_start();

    $name = ucwords($_POST['name']);
    
    $_SESSION['name'] = $name;
    header("Location: pages/dashboard_admin.php");
    exit();  
} 
else {
    echo '<script>alert("Username atau password salah. coba masukkan username admin dan password 123"); window.location.href = "index.php";</script>';
}
?>
