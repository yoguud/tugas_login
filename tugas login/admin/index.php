<?php 
session_start(); // Pastikan session dimulai

// Cek apakah user sudah login, jika tidak, redirect ke halaman login
if (!isset($_SESSION['email'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>TUGAS CRUD</title>
</head>
<body>
    <h2>Data Siswa SMKN 2 Kota Bekasi</h2>

    <!-- Menampilkan informasi user yang login beserta waktu login -->
    <p>Selamat datang, <?php echo $_SESSION['username']; ?></p>

    <!-- Menampilkan waktu login yang disimpan dalam session -->
    <p>Waktu Login: <?php echo $_SESSION['login_time']; ?></p>

    <br/>
    
    <a href="tambah.php">+ Tambah Siswa</a>
    <br/>
    <br/>
    <table border="1" style="width: 75%; border-collapse: collapse; margin: 10px 0; text-align:center;">
        <tr>
            <th>No</th>
            <th>NIS</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Alamat</th>
            <th>No Telpon</th>
            <th>OPSI</th>
        </tr> 
        <?php 
        include 'koneksi.php';
        $no = 1;
        $data = mysqli_query($koneksi,"select * from siswa");
        while($d = mysqli_fetch_array($data)){
        ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $d['nis']; ?></td>
                <td><?php echo $d['nama']; ?></td>
                <td><?php echo $d['kelas']; ?></td>
                <td><?php echo $d['alamat']; ?></td>
                <td><?php echo $d['no_telpon']; ?></td>
                <td>
                    <a href="edit.php?nis=<?php echo $d['nis']; ?>" style="text-decoration:none;">EDIT</a>
                    <a href="hapus.php?nis=<?php echo $d['nis']; ?>" style="text-decoration:none;">HAPUS</a>
                </td>
            </tr>
        <?php 
        }
        ?>
    </table>
    <a href="logout.php">Logout</a>
</body>
</html>
