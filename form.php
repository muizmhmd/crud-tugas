<!DOCTYPE html>
<html>
<head>
    <title>Form Add Data</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<style>
		.erro {color: red};
	</style>
</head>
<body>
<div class="container">
	<br>
	<h2>Form Add Data</h2>
	<br>
	
	<?php
		include ("add.php");
	?>

	<div class="col-md-6">
		<form method="post" action="form.php" autocomplete="off">
			<div class="form-group">
				<label for="name">Name</label>
				<input class="form-control" type="text" name="name" id="name">
			</div>
			<div class="form-group">
				<label for="username">Username</label>
				<input class="form-control" type="text" name="username" id="username">
			</div>
			<div class="form-group">
				<label for="email">Email</label>
				<input class="form-control" type="text" name="email" id="email" id="exampleInputEmail1" aria-describedby="emailHelp">
			</div>
			<div class="form-group">
				<label for="password">Password</label>
				<input class="form-control" type="password" name="password" id="password">
			</div>
			<button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
			<a href="index.php">Kembali</a>
		</form>
	</div>
</div>
</body>
</html>