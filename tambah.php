<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data</title>
</head>
<body>

<center>
<h2>Tambah Buku</h2>
<form action="tambah.php" method="POST">

	<input type="hidden" name="id">
	<table>
		<tr>
			<td>Kode Buku : </td>
			<td><input type="text" name="kodeBuku"></td>
		</tr>
		<tr>
			<td>Judul Buku : </td>
			<td><input type="text" name="judulBuku"></td>
		</tr>
		<tr>
			<td>Pengarang : </td>
			<td><input type="text" name="pengarang"></td>
		</tr>
		<tr>
			<td>Penerbit : </td>
			<td><input type="text" name="penerbit"></td>
		</tr>
	</table>
	<button type="submit" name="tambahbuku">Simpan</button>
	<button type="reset">Reset</button>
</form>
</center>
</body>
</html>

<?php 

	require 'library.php';
	if(isset($_POST['tambahbuku'])){
		$kodeBuku = $_POST['kodeBuku'];
		$judulBuku = $_POST['judulBuku'];
		$pengarang = $_POST['pengarang'];
		$penerbit = $_POST['penerbit'];

		$lib = new library();
		$tambah = $lib->tambahBuku($kodeBuku,$judulBuku,$pengarang,$penerbit);
		if($tambah){
			header('Location : index.php');
		}else{
			echo "Gagal Simpan";
		}
	}

?>