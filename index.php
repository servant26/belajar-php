<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Belajar PHP</title>
    <link rel="icon" href="assets/gambar/icon.png" type="image/png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>
	<div class="container bg-light position-absolute top-50 start-50 translate-middle p-5">
	<form method="post" action="proses.php">
	  <h5 class="text-center">LOGIN</h5><br>
	  <div class="mb-3"> 
	    <label for="exampleInputName" class="form-label">Nama</label>
	    <input type="text" name="name" class="form-control" id="exampleInputName" aria-describedby="nameHelp" placeholder="Masukkan nama kamu..." required>
	  </div>
	  <div class="mb-3"> 
	    <label for="exampleInputUsername" class="form-label">Username</label>
	    <input type="text" name="username" class="form-control" id="exampleInputUsername" aria-describedby="usernameHelp" placeholder="Masukkan usename..." required>
	  </div>
	  <div class="mb-3">
	    <label for="exampleInputPassword1" class="form-label">Password</label>
	    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Masukkan password..." required>
	  </div>
	  <div class="d-grid gap-2">
	  	<button type="submit" class="btn btn-primary">Login</button>
	  </div>
	</form>
	</div>
</body>
</html>