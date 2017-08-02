<?php 

	class library{
		public function __construct(){
			$this->db = new PDO('mysql:host=localhost; dbname=crud_oop_dan_pdo','root','');
		}

		//tambah data baru
		public function tambahBuku($kodeBuku,$judulBuku,$pengarang,$penerbit){
				$sql = "INSERT INTO buku(kodeBuku,judulBuku,pengarang,penerbit) VALUES('$kodeBuku','$judulBuku','$pengarang','$penerbit')";
				$query = $this->db->query($sql);
				if(!$query){
					return "Gagal Masuk";
				} else{
					return "Sukses Masuk";
				}
		}

		//mengedit data
		public function editBuku($kodeBuku){
			$sql = "SELECT * FROM buku WHERE kodeBuku='$kodeBuku'";
			$query = $this->db->query($sql);
			return $query;
		}

		//tambah data yang ada di database
		public function updateBuku($kodeBuku,$judulBuku,$pengarang,$penerbit){
			$sql = "UPDATE buku SET kodeBuku='$kodeBuku',judulBuku='$judulBuku',pengarang='$pengarang',penerbit='$penerbit' WHERE buku.kodeBuku='$kodeBuku'";
			$query = $this->db->query($sql);
			if(!$query){
				return "Gagal Update";
			}else{
				return "Sukses Update";
			}
		}

		//menampilkan data yang ada di database
		public function tampilData(){
			$sql = "SELECT * FROM buku";
			$query = $this->db->query($sql
				);
			return $query;
		}

		//menghapus data
		public function hapusData($kodeBuku){
			$sql = "DELETE FROM buku WHERE kodeBuku='$kodeBuku'";
			$query = $this->db->query($sql);
		}
	}

?>