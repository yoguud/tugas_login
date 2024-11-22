<?php 
// Mengaktifkan session PHP
session_start();

// Menghubungkan dengan koneksi ke database
include 'koneksi.php';

// Menangkap data yang dikirim dari form
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

// Menyeleksi data admin dengan email dan password yang sesuai
$data = mysqli_query($koneksi, "SELECT * FROM admin WHERE email='$email' AND password='$password'");

// Menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);

// Jika data ditemukan
if($cek > 0){
    // Ambil data admin dari hasil query
    $admin = mysqli_fetch_array($data); 
    
    // Set session untuk email dan username
    $_SESSION['email'] = $email;
    $_SESSION['username'] = $admin['username']; // Menyimpan username ke session
    $_SESSION['status'] = "login"; // Status login

    // Menetapkan zona waktu ke WIB (Waktu Indonesia Barat)
    date_default_timezone_set('Asia/Jakarta');
    
    // Mendapatkan waktu login saat ini dengan format 24 jam
    $login_time = date('Y-m-d H:i:s'); // Format: YYYY-MM-DD HH:MM:SS (24 jam)
    
    // Menyimpan waktu login di session
    $_SESSION['login_time'] = $login_time; // Menyimpan waktu login di session

    // Menyimpan waktu login di database
    mysqli_query($koneksi, "UPDATE admin SET last_login='$login_time' WHERE email='$email'");

    // Redirect ke halaman admin setelah login sukses
    header("Location: admin/tambah.php");
}else{
    // Jika login gagal, kembali ke halaman login dengan pesan gagal
    header("Location: index.php?pesan=gagal");
}
?>
