<?php 

	class library{
		public function __construct(){
			$this->db = new PDO('mysql:host=localhost; dbname=crud_oop_dan_pdo','root','');
		}

		//tambah data baru
		public function tambahSiswa($id,$nama,$kelas,$alamat){
				$sql = "INSERT INTO biodata(id,nama,kelas,alamat) VALUES('$id','$nama','$kelas','$alamat')";
				$query = $this->db->query($sql);
				if(!$query){
					return "Gagal Masuk";
				} else{
					return "Sukses Masuk";
				}
		}

		//mengedit data
		public function editSiswa($id){
			$sql = "SELECT * FROM biodata WHERE id='$id'";
			$query = $this->db->query($sql);
			return $query;
		}

		//tambah data yang ada di database
		public function updateSiswa($id,$nama,$kelas,$alamat){
			$sql = "UPDATE biodata SET id='$id',nama='$nama',kelas='$kelas',alamat='$alamat' WHERE biodata.id='$id'";
			$query = $this->db->query($sql);
			if(!$query){
				return "Gagal Update";
			}else{
				return "Sukses Update";
			}
		}

		//menampilkan data yang ada di database
		public function tampilData(){
			$sql = "SELECT * FROM biodata";
			$query = $this->db->query($sql
				);
			return $query;
		}

		//menghapus data
		public function hapusData($id){
			$sql = "DELETE FROM biodata WHERE id='$id'";
			$query = $this->db->query($sql);
		}
	}

?>