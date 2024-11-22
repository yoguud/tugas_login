<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$nis = $_POST['nis'];
$nama = $_POST['nama'];
$kelas = $_POST['kelas'];
$alamat = $_POST['alamat'];
$no_telpon = $_POST['no_telpon'];
 
// menginput data ke database
mysqli_query($koneksi,"insert into siswa values('$nis','$nama','$kelas','$alamat','$no_telpon')");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?> 