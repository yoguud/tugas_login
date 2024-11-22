<!DOCTYPE html>
<html>
<head>
	<title>Edit Data Siswa</title>
</head>
<body>
	<h1>EDIT DATA SISWA</h1>
 
	<?php
	include 'koneksi.php';
	$nis = $_GET['nis'];
	$data = mysqli_query($koneksi,"select * from siswa where  nis='$nis'");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method="post" action="update.php">
			<table>
				<tr>			
					<td>NIS</td>
					<td>
						<input type="hidden" name="nis" value="<?php echo $d['nis']; ?>">
						<input type="text" name="nis" value="<?php echo $d['nis']; ?>">
					</td>
				</tr>
				<tr>
					<td>Nama</td>
					<td><input type="text" name="nama" value="<?php echo $d['nama']; ?>"></td>
				</tr>
				<tr>
					<td>Kelas</td>
					<td><input type="number" name="kelas" value="<?php echo $d['kelas']; ?>"></td>
				</tr>
				<tr>
					<td>Alamat</td>
					<td><input type="text" name="alamat" value="<?php echo $d['alamat']; ?>"></td>
				</tr>
				<tr>
					<td>No Telpon</td>
					<td><input type="number" name="no_telpon" value="<?php echo $d['no_telpon']; ?>"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="SIMPAN"></td>
				</tr>		
			</table>
		</form>
		<?php 
	}
	?>
  <a href="index.php">KEMBALI</a>
 
</body>
</html>