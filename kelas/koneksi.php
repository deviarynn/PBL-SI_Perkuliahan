<?php 
class database_kelas{
 
	var $host = "localhost";
	var $username = "root";
	var $password = "";
	var $database = "perkuliahan";
	var $koneksi = "";

	function __construct()
	{
		$this->koneksi = mysqli_connect($this->host, $this->username, $this->password,$this->database);
		if (mysqli_connect_errno()){
			echo "Koneksi database gagal : " . mysqli_connect_error();
		}
	}
 
	function tampil_data()
	{
		$query = "SELECT kelas.id_kls, kelas.nama_kelas, kelas.thn_akademik, prodi.nama_prodi FROM kelas join prodi on kelas.id_prodi=prodi.id_prodi";
		$data = mysqli_query($this->koneksi, $query);
		while($row = mysqli_fetch_array($data)){
			$hasil[] = $row;
		}
		return $hasil;
	}
 
	function tambah_data($nama_kelas,$thn_akademik,$id_prodi)
	{
		mysqli_query($this->koneksi,"insert into kelas values (' ','$nama_kelas', '$thn_akademik', '$id_prodi')");
	}

	function get_by_id($id_kls)
	{
		$query = mysqli_query($this->koneksi,"select * from kelas where id_kls='$id_kls'");
		return $query->fetch_array();
	}

	function update_data($nama_kelas,$thn_akademik,$id_prodi,$id_kls)
	{
		$query = mysqli_query($this->koneksi,"update kelas set nama_kelas='$nama_kelas',thn_akademik='$thn_akademik',id_prodi='$id_prodi' where id_kls='$id_kls'");
	}

	function delete_data($id_kls) 
	{
		$query = mysqli_query($this->koneksi,"delete from kelas where id_kls='$id_kls'");
	}
}
?>