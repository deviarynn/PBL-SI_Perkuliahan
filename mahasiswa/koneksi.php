<?php 
class database{
 
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
 
	function tampil_mhs()
	{
		$data = mysqli_query($this->koneksi,"select * from mahasiswa");
		while($row = mysqli_fetch_array($data)){
			$hasil[] = $row;
		}
		return $hasil;
	}
 
	function tambah_mhs($npm,$nama_mhs,$alamat)
	{
		mysqli_query($this->koneksi,"insert into mahasiswa values ('','$npm','$nama_mhs','$alamat')");
	}

    function get_by_id($id_mhs)
	{
		$query = mysqli_query($this->koneksi,"select * from mahasiswa where id_mhs='$id_mhs'");
		return $query->fetch_array();
	}

    function update_mhs($npm,$nama_mhs,$alamat,$id_mhs)
	{
		$query = mysqli_query($this->koneksi,"update mahasiswa set npm='$npm',nama_mhs='$nama_mhs',alamat='$alamat' where id_mhs='$id_mhs'");
	}

    function delete_mhs($id_mhs)
	{
		$query = mysqli_query($this->koneksi,"delete from mahasiswa where id_mhs='$id_mhs'");
	}
}
?>