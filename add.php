<?php 
// koneksi database
include 'koneksi.php';

if(isset($_POST['simpan'])){
    // menangkap data yang di kirim dari form
    $name = $_POST['name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    if(empty($name)){
        echo "<p style='color:red'>Name tidak boleh kosong!</p>";
    }
    else if(empty($username)){
        echo "<p style='color:red'>Userame tidak boleh kosong!</p>";
    }
    else if(empty($email)){
        echo "<p style='color:red'>Email tidak boleh kosong!</p>";
    }
    else if(empty($password)){
        echo "<p style='color:red'>Password tidak boleh kosong!</p>";
    }
    else {
    // menginput data ke database
    mysqli_query($koneksi,"insert into crud_tugas1 values('','$name','$username','$password','$email')");
    // mengalihkan halaman kembali ke index.php
    header("location:index.php");
    }
}
?>