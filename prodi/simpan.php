<?php 
include('koneksi.php');
$koneksi = new database_prodi();

$action = $_GET['action'];
if($action == "add")
{
	$koneksi->tambah_data($_POST['nama_prodi']);
	header('location:tampil.php');
}
elseif($action=="update")
{
	$koneksi->update_data($_POST['nama_prodi'],$_POST['id_prodi']);
	header('location:tampil.php');
}
elseif($action=="delete")
{
	$id_prodi = $_GET['id'];
	$koneksi->delete_data($id_prodi);
	header('location:tampil.php');
}
?>