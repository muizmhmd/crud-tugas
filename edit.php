<!DOCTYPE html>
<html>
<head>
    <title>Form Edit Data</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<br>
		<h2>Form Edit Data</h2>
		<br>
		<div class="col-md-6">
			<?php
			include 'koneksi.php';
			$id = $_GET['id'];
			$data = mysqli_query($koneksi,"select * from crud_tugas1 where id='$id'");
			while($d = mysqli_fetch_array($data)){
				?>
				<form method="post" action="update.php">

					<div class="form-group">
						<label for="name">Name</label>
						<input type="hidden" name="id" value="<?php echo $d['id']; ?>">
						<input class="form-control" type="text" name="name" id="name" value="<?php echo $d['name']; ?>">
					</div>
					<div class="form-group">
						<label for="username">Username</label>
						<input class="form-control" type="text" name="username" id="username" value="<?php echo $d['username']; ?>">
					</div>
					<div class="form-group">
						<label for="email">Email</label>
						<input class="form-control" type="text" name="email" id="email" value="<?php echo $d['email']; ?>">
					</div>
					<div class="form-group">
						<label for="password">Password</label>
						<input class="form-control" type="password" name="password" id="password" value="<?php echo $d['password']; ?>">
					</div>
					<button type="submit" class="btn btn-primary">Simpan</button>
					<a href="index.php">Kembali</a>
				</form>
				<?php 
			}
			?>
		</div>
	</div>
</body>
</html>