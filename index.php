<!DOCTYPE html>
<html>
<head>
    <title>Tugas CRUD</title>
	<link rel="stylesheet" href="css/bootstrap.min.css"> 
</head>
<body>
<div class="container">
	<br>
	<h2>Tugas CRUD</h2>
	<br>
	<a href="form.php">+ Add Data</a>
	<br><br>
	<table class="table tab-striped">
		<thead>
		<tr>
			<th>NO</th>
			<th>Name</th>
			<th>Username</th>
			<th>Email</th>
            <th>Password</th>
            <th>Opsi</th>
		</tr>
		</thead>
		<tbody>
		<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from crud_tugas1");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['name']; ?></td>
				<td><?php echo $d['username']; ?></td>
				<td><?php echo $d['email']; ?></td>
				<td><?php echo $d['password']; ?></td>
				<td>
					<a href="edit.php?id=<?php echo $d['id']; ?>">Edit</a>
					<a href="delete.php?id=<?php echo $d['id']; ?>">Hapus</a>
				</td>
			</tr>
			<?php 
		}
		?>
		</tbody>
    </table>
</div>
</body>
</html>
