<?php 
include('koneksi.php');
$koneksi = new database();

$action = $_GET['action'];
if($action == "add")
{
	$koneksi->tambah_mhs($_POST['npm'],$_POST['nama_mhs'],$_POST['alamat']);
	header('location:tampil.php');
}
elseif($action=="update")
{
	$koneksi->update_mhs($_POST['npm'],$_POST['nama_mhs'],$_POST['alamat'],$_POST['id_mhs']);
	header('location:tampil.php');
}
elseif($action=="delete")
{
	$id_mhs = $_GET['id'];
	$koneksi->delete_mhs($id_mhs);
	header('location:tampil.php');
}
?>