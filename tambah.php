<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<center>
<h2>Tambah Biodata</h2>
<form action="tambah.php" method="POST">

	<input type="hidden" name="id">
	<table>
		<tr>
			<td>Nama Lengkap : </td>
			<td><input type="text" name="nama"></td>
		</tr>
		<tr>
			<td>Kelas : </td>
			<td><input type="text" name="kelas"></td>
		</tr>
		<tr>
			<td>Alamat : </td>
			<td><input type="text" name="alamat"></td>
		</tr>
	</table>
	<button type="submit" name="tambahbio">Simpan</button>
	<button type="reset">Reset</button>
</form>
</center>
</body>
</html>

<?php 

	require 'library.php';
	if(isset($_POST['tambahbio'])){
		$id = $_POST['id'];
		$nama = $_POST['nama'];
		$kelas = $_POST['kelas'];
		$alamat = $_POST['alamat'];

		$lib = new library();
		$tambah = $lib->tambahSiswa($id,$nama,$kelas,$alamat);
		if($tambah){
			header('Location : index.php');
		}else{
			echo "Gagal Simpan";
		}
	}

?>