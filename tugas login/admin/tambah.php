<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data</title>
</head>
<body>
	<h3>TAMBAH DATA SISWA</h3>
	<form method="post" action="tambah_aksi.php">
		<table>
			<tr>			
				<td>NIS</td>
				<td><input type="number" name="nis"></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>Kelas</td>
				<td><input type="number" name="kelas"></td>
			</tr>
			<tr>
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat"></td>
			</tr>
			<tr>
			<tr>
				<td>No Telpon</td>
				<td><input type="number" name="no_telpon"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="SIMPAN"></td>
			</tr>		
		</table>
	</form>
  <a href="index.php">KEMBALI</a>
</body>
</html>