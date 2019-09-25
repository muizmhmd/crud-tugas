<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$id = $_POST['id'];
$name = $_POST['name'];
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

// update data ke database
mysqli_query($koneksi,"update crud_tugas1 set name='$name', username='$username', email='$email', password='$password' where id='$id'");

// mengalihkan halaman kembali ke index.php
header("location:index.php");

?>