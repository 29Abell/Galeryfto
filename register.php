<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Halaman register</title>
	<link rel="stylesheet" href="asset/css/bootstrap.min.css">
</head>

<body>
	<nav class="navbar navbar-expand-lg bg-body-tertiary bg-secondary text-light border-center border-dark">
		<div class="container">

			<h2 class="navbar-brand" href="index.php">Halaman register</h2>
		</div>
		</div>
	</nav>

	<div class="container py-5">
		<div class="row justify-content-center">
			<div class="col-md-4">
				<div class="card">
					<div class="card-header text-center">
					</div>

					<div class="card-body">
						<form action="proses_register.php" method="post">
							<label class="form-label">Username</label>
							<input type="text" name="username" class="form-control" required>
							<label class="form-label">Password</label>
							<input type="password" name="password" class="form-control" required>
							<label class="form-label">Email</label>
							<input type="email" name="email" class="form-control" required>
							<label class="form-label">Nama lengkap</label>
							<input type="text" name="namalengkap" class="form-control" required>
							<label class="form-label">Alamat</label>
							<input type="text" name="alamat" class="form-control" required>
							<div class="d-grid mt-2">
								<button class="btn btn-primary" type="submit">Login</button>
							</div>
						</form>
						<hr>
						<p>Sudah punya akun? <a href="login.php">Login disini!</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>

	<br><br>
	<footer class="d-flex justify-content-center border-top mt-2 bg-secondary fixed-bottom">
		<p class="pt-2 text-light">&copy; UKK RPL 2024 | ABEL RATNA WULAN| SMK AL-GHIFARI</p>
	</footer>

	<script type="text/javascript" src="asset/js/bootstrap.min.js"></script>
</body>

</html>