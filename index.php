<!DOCTYPE html>
<html>
<head>
	<title> TAMPIL DATA </title>
</head>

<body>
<center>
<h2> CRUD DENGAN OOP DAN PDO </h2>

<h2>DAFTAR BUKU</h2>

<table border="1">
	<tr>
		<td>Kode Buku</td>
		<td>Judul Buku</td>
		<td>Pengarang</td>
		<td>Penerbit</td>
		<td>Opsi</td>
	</tr>
	<?php 
		require 'library.php';
		$lib = new library();
		$tampil = $lib->tampilData();
		while($data = $tampil->fetch(PDO::FETCH_OBJ)){
			echo "
				<tr>
				<td> $data->kodeBuku </td>
				<td> $data->judulBuku </td>
				<td> $data->pengarang </td>
				<td> $data->penerbit </td>
				<td> 
				<a href='index.php?hapus=$data->kodeBuku'>Hapus</a> ||
				<a href='edit.php?kodeBuku=$data->kodeBuku'>Edit</a>
				</td>
				</tr>";
		}
	?>
</table>

<br>
<a href="tambah.php"><button>Tambah Data</button></a>
</center>
</body>
</html>
<?php 
	if(isset($_GET['hapus'])){
		$del = $lib->hapusData($_GET['hapus']);
		header("Location : index.php");
	}
?>