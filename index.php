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
</head>
<body>
	<div class="container bg-light position-absolute top-50 start-50 translate-middle p-5">
	<form>
	  <h5 class="text-center">LOGIN</h5><br>
	  <div class="mb-3"> 
	    <label for="exampleInputEmail1" class="form-label">Username</label>
	    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan usename...">
	  </div>
	  <div class="mb-3">
	    <label for="exampleInputPassword1" class="form-label">Password</label>
	    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Masukkan password...">
	  </div>
	  <div class="mb-3 form-check">
	    <input type="checkbox" class="form-check-input" id="exampleCheck1">
	    <label class="form-check-label" for="exampleCheck1">Ingat Saya</label>
	  </div>
	  <label for="exampleInputSelect" class="form-label">Pilih role</label>
		<select class="form-select" aria-label="Default select example">
		  <option value="1">Mahasiswa</option>
		  <option value="2">Staff</option>
		  <option value="3">Dosen</option>
		</select><br>
	  <div class="d-grid gap-2">
	  	<a class="btn btn-primary" href="pages/dashboard.php" role="button">Link</a>
	  </div>
	</form>
	</div>
</body>
</html>