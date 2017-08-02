<?php 

require 'library.php';

if(isset($_GET['kodeBuku'])){
	$lib = new library();
	$bio = $lib->editBuku($_GET['kodeBuku']);
	$edit = $bio->fetch(PDO::FETCH_OBJ);
	echo '
		<!DOCTYPE html>
	<html>
	<head>
		<title>Edit Data</title>
	</head>
	<body>
	<center>
	<h2>Edit Data</h2>
	<form action="edit.php" method="POST">
	<table>
	<tr>
		<td>Kode Buku : </td>
		<td><input type="text" name="kodeBuku" value="'.$edit->kodeBuku.'"></td>
	</tr>
	<tr>
		<td>Judul Buku : </td>
		<td><input type="text" name="judulBuku" value="'.$edit->judulBuku.'"></td>
	</tr>
	<tr>
		<td>Pengarang : </td>
		<td><input type="text" name="pengarang" value="'.$edit->pengarang.'"></td>
	</tr>
	<tr>
		<td>Penerbit : </td>
		<td><input type="text" name="penerbit" value="'.$edit->penerbit.'"></td>
	</tr>
	</table>
	<button type="submit" name="updateBuku">Simpan</button>
	</form>
	</center>
	</body>
	</html>
	';

}

if(isset($_POST['updateBuku'])){
	$kodeBuku = $_POST['kodeBuku'];
	$judulBuku = $_POST['judulBuku'];
	$pengarang = $_POST['pengarang'];
	$penerbit = $_POST['penerbit'];
	$lib = new library();
	$upd = $lib->updateBuku($kodeBuku,$judulBuku,$pengarang,$penerbit);
	if($upd){
		header('Location : index.php');
	}
}

?>

