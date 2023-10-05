<?php  
$username = $_POST['username'];
$password = $_POST['password'];

if($username == "admin" && $password == "123"){
	header("Location : pages/dashboard.php");
} else {
	echo("username salah");
}
?>