<?php 
include('koneksi.php');
$koneksi = new database_kelas();
 
$id = $_GET['action'];
if($id == "add")
{
	$koneksi->tambah_data($_POST['nama_kelas'],$_POST['thn_akademik'],$_POST['id_prodi']);
	header('location:tampil.php');
}
elseif($id=="update")
{
	$koneksi->update_data($_POST['nama_kelas'],$_POST['thn_akademik'],$_POST['id_prodi'],$_POST['id_kls']);
	header('location:tampil.php');
}
elseif($id=="delete")
{
	$id_kls = $_GET['id'];
	$koneksi->delete_data($id_kls);
	header('location:tampil.php');
}
?>