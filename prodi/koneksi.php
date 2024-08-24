<?php 
class database_prodi{
 
	var $host = "localhost";
	var $username = "root";
	var $password = "";
	var $database = "perkuliahan";
	var $koneksi = "";

	function __construct(){
		$this->koneksi = mysqli_connect($this->host, $this->username, $this->password,$this->database);
		if (mysqli_connect_errno()){
			echo "Koneksi database gagal : " . mysqli_connect_error();
		}
	}
 
	function tampil_data()
	{
		$data = mysqli_query($this->koneksi,"select * from prodi");
		while($row = mysqli_fetch_array($data)){
			$hasil[] = $row;
		}
		return $hasil;
	}
 
	function tambah_data($nama_prodi)
	{
		mysqli_query($this->koneksi,"insert into prodi values ('','$nama_prodi')");
	}

    function get_by_id($id_prodi)
	{
		$query = mysqli_query($this->koneksi,"select * from prodi where id_prodi='$id_prodi'");
		return $query->fetch_array();
	}

    function update_data($nama_prodi,$id_prodi)
	{
		$query = mysqli_query($this->koneksi,"update prodi set nama_prodi='$nama_prodi' where id_prodi='$id_prodi'");
	}

    function delete_data($id_prodi)
	{
		$query = mysqli_query($this->koneksi,"delete from prodi where id_prodi='$id_prodi'");
	}
}
?>