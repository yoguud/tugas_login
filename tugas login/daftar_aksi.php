<?php
// koneksi database
include 'koneksi.php';
session_start();

// menangkap data yang di kirim dari form
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];


$result = mysqli_query($koneksi, "SELECT * FROM admin WHERE email = '" . $_POST['email'] . "'");


if (mysqli_fetch_assoc($result)) {
  header("location:daftar.php?error=gagal");
}else{
  mysqli_query($koneksi, "INSERT INTO admin(username,email,password)VALUES('$username','$email','$password')");
  header("location:index.php");
}

