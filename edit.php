<?php 

require 'library.php';

if(isset($_GET['id'])){
	$lib = new library();
	$bio = $lib->editSiswa($_GET['id']);
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
	<input type="hidden" name="id" value="'.$edit->id.'" /><br><br>
	<tr>
		<td>Nama Lengkap : </td>
		<td><input type="text" name="nama" value="'.$edit->nama.'"></td>
	</tr>
	<tr>
		<td>Kelas : </td>
		<td><input type="text" name="kelas" value="'.$edit->kelas.'"></td>
	</tr>
	<tr>
		<td>Alamat : </td>
		<td><input type="text" name="alamat" value="'.$edit->alamat.'"></td>
	</tr>
	</table>
	<button type="submit" name="updateSiswa">Simpan</button>
	</form>
	</center>
	</body>
	</html>
	';

}

if(isset($_POST['updateSiswa'])){
	$id = $_POST['id'];
	$nama = $_POST['nama'];
	$kelas = $_POST['kelas'];
	$alamat = $_POST['alamat'];
	$lib = new library();
	$upd = $lib->updateSiswa($id,$nama,$kelas,$alamat);
	if($upd){
		header('Location : index.php');
	}
}

?>

