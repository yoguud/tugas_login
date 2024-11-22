<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$nis = $_POST['nis'];
$nama = $_POST['nama'];
$kelas = $_POST['kelas'];
$alamat = $_POST['alamat'];
$no_telpon = $_POST['no_telpon'];
 
// update data ke database
mysqli_query($koneksi,"update siswa set nis='$nis', nama='$nama', kelas='$kelas', alamat='$alamat', no_telpon='$no_telpon' where nis='$nis'");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>