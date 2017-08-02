<!DOCTYPE html>
<html>
<head>
	<title> TAMPIL DATA </title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
<center>
<h2> CRUD DENGAN OOP DAN PDO </h2>

<h2>DAFTAR BIODATA SISWA</h2>

<table border="1">
	<tr>
		<td>ID</td>
		<td>Nama Siswa</td>
		<td>Kelas Siswa</td>
		<td>Alamat Siswa</td>
		<td>Opsi</td>
	</tr>
	<?php 
		require 'library.php';
		$lib = new library();
		$tampil = $lib->tampilData();
		while($data = $tampil->fetch(PDO::FETCH_OBJ)){
			echo "
				<tr>
				<td> $data->id </td>
				<td> $data->nama </td>
				<td> $data->kelas </td>
				<td> $data->alamat </td>
				<td> 
				<a href='index.php?hapus=$data->id'>Hapus</a> ||
				<a href='edit.php?id=$data->id'>Edit</a>
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